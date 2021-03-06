@extends('layouts.dashboard')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<!-- summernote -->
<link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h3 class="card-title">All Units</h3>
        <button id="createNewUnit" type="button" class="btn bg-gradient-white btn-sm float-right">
            <i class="fas fa-plus"></i> Units
        </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered data-table" id="basic_datatable">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Unit Name</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $serial =1;
                @endphp

                @foreach($units as $unit)
                <tr>
                    <td>{{$serial++}}</td>
                    <td>{{$unit->unit_name}}</td>
                    <td>
                        {{$unit->creator->name}}
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)" title="Edit" data-toggle="tooltip" data-id="{{$unit->id}}"
                            data-original-title="Edit" class="edit btn bg-gradient-primary btn-xs editCategory"> <i
                                class="far fa-edit"></i></a>
                        <a href="javascript:void(0)" title="Delete" data-toggle="tooltip" data-id="{{$unit->id}}"
                            data-original-title="Delete" class="btn bg-gradient-danger btn-xs deleteCategory"> <i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="unitForm" name="unitForm" class="form-horizontal">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="unit_name" class="col-sm-6 control-label">Unit Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="unit_name" name="unit_name"
                                placeholder="Unit Name" value="" maxlength="100" required="">
                            <span id="unit_name_error" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary float-right" id="saveBtn" value="create">Save
                            changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@push('javascript')
<!-- DataTables -->
<script src="public/plugins/datatables/jquery.dataTables.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Summernote -->
<script src="public/plugins/summernote/summernote-bs4.min.js"></script>

@endpush

@push('script')

<script type="text/javascript">
    $(function () {

        $("#basic_datatable").DataTable();

        let selectedCategory = 0;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let doEdit = false;

        $('#createNewUnit').click(function () {
            doEdit = false;
            selectedCategory = 0;
            $('#saveBtn').val("create-category");
            $('#unit_id').val('');
            $('#unitForm').trigger("reset");
            $('#modalHeading').html("Create New Unit");
            $('#ajaxModel').modal('show');
        });


        $('body').on('click', '.editCategory', function () {
            var unit_id = $(this).data('id');
            selectedCategory = unit_id;
            $('#modalHeading').html("Edit Category");
            axios.get("{{ route('units.index') }}" + '/' + unit_id + '/edit')
                .then(function (response) {
                    //console.log(response);
                    $('#ajaxModel').modal('show');
                    $('#unit_id').val(response.data.id);
                    $('#unit_name').val(response.data.unit_name);
                    doEdit = true;
                }).catch(function (error) {
                    console.log(error);
                }).then(function () {
                    // always executed
                });
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();

            $("#unit_name_error").html("");

            $(this).html('Sending..');

            let createUrl = "{{ route('units.store')}}";
            let updateUrl = "{{ route('units.update',0)}}";

            let newUpdateUrl = updateUrl.replace('0', selectedCategory);
            let actionUrl = ((!doEdit) ? createUrl : newUpdateUrl);

            $.ajax({
                data: $('#unitForm').serialize(),
                url: actionUrl,
                type: ((!doEdit) ? "POST" : "PUT"),
                dataType: 'json',
                success: function (data, textStatus, xhr) {
                    if (xhr.status == 200) {
                        $('#unitForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        if (!doEdit) {
                            location.reload();
                        }
                    }
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    $("#unit_name_error").html(err.errors.unit_name);
                    $('#saveBtn').html('Save Changes');
                }
            });

        });

        $('body').on('click', '.deleteCategory', function () {

            var category_id = $(this).data("id");
            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('units.store') }}" + '/' + category_id,
                    success: function (data, textStatus, xhr) {
                        // table.draw();
                        if (xhr.status == 200) {
                            location.reload();
                        }
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }

        });

    });

</script>
@endpush
{{-- </html> --}}
