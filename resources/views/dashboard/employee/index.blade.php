@extends('layouts.dashboard')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('public/plugins/toastr/toastr.css')}}">

@endsection

@section('content')

    <div class="card">
        <div class="card-header bg-info">
            <h3 class="card-title">All Employees</h3>

            <button id="createEmployee" type="button" class="btn bg-gradient-white btn-sm float-right">
                <i class="fas fa-user-plus"></i> Employee
            </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered data-table table-responsive-sm" id="basic_dataTable">
                <thead>
                <tr>
                    <th>Serial</th>
                    <th>Employee Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Employee Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $serial = 1;
                @endphp

                @foreach ($employees as $item)
                    <tr>
                        <td>{{$serial++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>
                            <address class="m-0 p-0">
                                {{$item->geo_address}}
                            </address>
                        </td>
                        <td>{{ ucwords(str_replace('_',' ',$item->user_type))}}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" title="Edit" data-toggle="tooltip" data-id="{{$item->id}}"
                               data-original-title="Edit" class="edit btn bg-gradient-primary btn-xs editEmployee"> <i
                                    class="far fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" title="Delete" data-toggle="tooltip" data-id="{{$item->id}}"
                               data-original-title="Delete" class="btn bg-gradient-danger btn-xs deleteEmployee"> <i
                                    class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


    <div class="modal fade" id="employeeModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="employeeModalHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div id="employeeModalBody"></div>
                </div>
                <div class="modal-footer">
                    <button id="btnModalProcess" type="button" class="btn btn-primary">Process</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="employeeEditModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="employeeEditModalHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div id="employeeEditModalBody"></div>
                </div>
                <div class="modal-footer">
                    <button id="btnUpdateEmployee" type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('javascript')
    <!-- DataTables -->
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('public/plugins/toastr/toastr.min.js')}}"></script>

@endpush


@push('script')

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $("#basic_datatable").DataTable();

            let currentAction;
            let selectedEmployee;

            $("#createEmployee").on('click', function () {
                $('.alert-danger').hide();
                currentAction = 'create';
                let url = "{{route('employee.create')}}";

                axios.get(url, {}).then(function (response) {
                    $("#employeeModalBody").html(response.data);

                    if (parseInt(response.status) === 200) {
                        $("#employeeModal").modal('show');
                        $("#employeeModalHeading").html("Create New Employee");
                    }
                }).then(function (response) {
                    console.log("Always", response);
                    // always executed
                }).catch(function (error) {
                    console.log("Catch", error);

                });
            });

            $("body").on('click', '#btnModalProcess', function (e) {
                $("#employeeModalForm").submit();
            });

            $(document).on('submit', '#employeeModalForm', function (e) {
                e.preventDefault();
                let processUrl = $(this).attr('action');

                axios.post(processUrl, {
                    name: $("#name").val(),
                    mobile: $("#mobile").val(),
                    email: $("#email").val(),
                    password: $("#password").val(),
                    password_confirmation: $("#password_confirmation").val(),
                    // perm_add_house: $("#perm_add_house").val(),
                    // perm_add_road: $("#perm_add_road").val(),
                    // perm_add_ward: $("#perm_add_ward").val(),
                    // perm_add_para: $("#perm_add_para").val(),
                    address: $("#address").val(),
                    user_type: $("#user_type").val(),
                    status: $("#status").val(),
                }).catch(function (error) {
                    console.log("Error on Create", error);
                }).then(function (response) {
                    console.log(JSON.stringify(response));

                    $('.alert-danger').html('');
                    $('.alert-danger').hide();

                        if (typeof response.data.error !== "undefined") {
                            if (response.data.error.length > 0) {
                                jQuery.each(response.data.error, function (key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                });
                            }
                        }else{
                            toastr.success('Created !','New Employee Created.' , {timeOut: 5000});
                            location.reload();
                        }
                });


            });

            $(".order_status").on('click', function () {

                let order_id = $(this).data('id');
                selectedOrderId = order_id

                let status = $(this).data('status');
                let url = "{{route('order.process')}}";

                axios.post(url, {
                    orderId: selectedOrderId,
                    orderStatus: status
                }).then(function (response) {
                    console.log("Success ", response.data.success);
                    if (parseInt(response.status) === 200) {
                        alert(response.data.success);
                        location.reload();
                    }
                }).catch(function (error) {
                    //console.log("Error", error);

                }).then(function (error) {
                    //console.log("Always", error);
                    // always executed
                });

            });


            let selectedRow;


            $('body').on('click', '.editEmployee', function () {
                selectedRow = $(this).closest('tr');
                selectedEmployee = $(this).data('id');
                $('#employeeEditModalHeading').html("Edit Employee");

                axios.get("{{ route('employee.index') }}" + '/' + selectedEmployee + '/edit')
                    .then(function (response) {
                        $("#employeeEditModalBody").html(response.data);
                        $('#employeeEditModal').modal('show');
                        //doEdit = true;
                    }).catch(function (error) {
                    //console.log(error);
                }).then(function () {
                    // always executed
                });
            });



            $('body').on('click', '#btnUpdateEmployee', function (e) {
                let btn = $(this);

                e.preventDefault();
                $(this).html('Sending..');

                let updateUrl = "{{ route('employee.update',0)}}";
                let newUpdateUrl = updateUrl.replace('0', selectedEmployee);

                $.ajax({
                    data: $('#employeeModalForm').serialize(),
                    url: newUpdateUrl,
                    type:  "PUT",
                    dataType: 'json',
                    success: function (data, textStatus, xhr) {
                        if (xhr.status == 200) {
                            $(btn).html('Save Changes');
                            toastr.success('Updated !','Employee has been Updated.' , {timeOut: 5000});
                            location.reload();
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        if (xhr.status != 200) {
                            let responses = JSON.parse(xhr.responseText);
                            toastr.error('Problem !',responses.error , {timeOut: 5000});
                        }
                        $(btn).html('Save Changes');
                    },
                    complete: function (xhr, textStatus) {
                        // if (xhr.status != 200) {
                        //     let responses = JSON.parse(xhr.responseText);
                        //     toastr.error('Problem !',responses.error , {timeOut: 5000});
                        // }
                        // $(btn).html('Save Changes');
                    }
                });

            });



            $('body').on('click', '.deleteEmployee', function () {
                selectedEmployee = $(this).data('id');

                let url = "{{ route('employee.destroy',0)}}";
                let deleteUrl = url.replace('0', selectedEmployee);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "DELETE",
                            url: deleteUrl,
                            success: function (data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your Product has been deleted.',
                                    'success'
                                );
                                location.reload();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                    }

                })


            });

        });

    </script>
@endpush
{{-- </html> --}}
