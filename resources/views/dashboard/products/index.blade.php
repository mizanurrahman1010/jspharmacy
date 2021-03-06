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
            <h3 class="card-title">All Products</h3>
            <button id="createNewProduct" type="button" class="btn bg-gradient-white btn-sm float-right">
                <i class="fas fa-plus"></i> Product
            </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <table id="product-data-table" class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Serial</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Rate / Unit</th>
                    <th>Company</th>
                    <th>Code</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
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
                    <form id="productForm" name="productForm" class="form-horizontal">
                        <input type="hidden" name="product_id" id="product_id">

                        <div class="form-group">
                            <label for="product_name" class="col-sm-6 control-label">Product Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                       placeholder="Product Name" value="" maxlength="50" required="">
                                <span id="product_name_error" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category" class="col-sm-6 control-label">Product Category</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="category" name="category" placeholder="Category"
                                        required="">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <span id="category_error" class="text-danger"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="col-sm-6 control-label">Product Rate</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="rate" name="rate" placeholder="Rate"
                                               required="">
                                        <span id="rate_error" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="unit" class="col-sm-6 control-label">Product Unit</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="unit" name="unit" placeholder="Unit" required="">
                                            @foreach ($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                            @endforeach
                                        </select>
                                        <span id="unit_error" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="unit" class="col-sm-6 control-label">Product Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="product_status" name="product_status" placeholder="Unit" required="">
                                            @php
                                                $stock_status = [1=>'In Stock',0=>'Out of Stock'];
                                            @endphp
                                            @foreach ($stock_status as $key=>$val)
                                                <option value="{{$key}}">{{$val}}</option>
                                            @endforeach
                                        </select>
                                        <span id="unit_error" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="col-sm-6 control-label">Short Code</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="short_code" name="short_code" placeholder="Company Short Code"
                                               required="">
                                        <span id="short_code_error" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-6 control-label">Company</label>
                            <div class="col-sm-12">
                            <textarea id="detail" name="detail" required="" placeholder="Company"
                                      class="form-control"></textarea>
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

            $.fn.dataTable.ext.errMode = 'throw';

            var productDataTable = $('#product-data-table').DataTable({
                serverSide: true,
                ajax: "{{ route('products.index') }}",
                searching:true,
                processing: true,
                responsive: true,
                //scrollY:600,
                //scrollX:true,
                //scrollCollapse:true,
                columns: [
                    {data: "DT_RowIndex",name: "DT_RowIndex",orderable: false, searchable: false},
                    {data: 'product_name', name: 'product_name'},
                    {data: 'category', name: 'category'},
                    {data: 'rate', name: 'rate',className: "text-right"},
                    {data: 'detail', name: 'detail'},
                    {data: 'short_code', name: 'short_code'},
                    {data: 'added_by', name: 'added_by'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                "order": [[ 4, "asc" ],[ 5, "desc" ]]
            });

            let currentUser = '{{Auth::user()->name}}';
            //alert(currentUser);
            let selectedProduct = 0;



            //let productDataTable = $("#basic_datatable").DataTable();

            let doEdit = false;

            $('#createNewProduct').click(function () {
                doEdit = false;
                selectedProduct = 0;
                $('#saveBtn').val("create-product");
                $('#product_id').val('');
                $('#productForm').trigger("reset");
                $('#modalHeading').html("Create New Product");
                $('#ajaxModel').modal('show');
            });

            let selectedRow;

            $('body').on('click', '.editProduct', function () {

                var product_id = $(this).data('id');
                selectedRow = $(this).closest('tr');
                selectedProduct = product_id;

                $('#modalHeading').html("Edit Product");

                axios.get("{{ route('products.index') }}" + '/' + product_id + '/edit')
                    .then(function (response) {

                        $('#ajaxModel').modal('show');

                        $('#product_id').val(response.data.id);
                        $('#product_name').val(response.data.product_name);
                        $('#category').val(response.data.category);
                        $('#rate').val(response.data.rate);
                        $('#unit').val(response.data.unit);
                        $('#detail').val(response.data.detail);

                        $('#short_code').val(response.data.short_code);
                        $('#product_status').val(response.data.product_status);

                        doEdit = true;
                    }).catch(function (error) {
                    //console.log(error);
                }).then(function () {
                    // always executed
                });
            });

            function manageIndex() {
                let pageSize = $('.custom-select').val();
                //console.log(pageSize);
            }

            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');

                $("#product_name_error").html("");
                $("#rate_error").html("");
                $("#unit_error").html("");
                $("#category_error").html("");

                $('#short_code_error').val("");
                $('#product_status_error').val("");


                let createUrl = "{{ route('products.store')}}";
                let updateUrl = "{{ route('products.update',0)}}";

                let newUpdateUrl = updateUrl.replace('0', selectedProduct);
                let actionUrl = ((!doEdit) ? createUrl : newUpdateUrl);

                $.ajax({
                    data: $('#productForm').serialize(),
                    url: actionUrl,
                    type: ((!doEdit) ? "POST" : "PUT"),
                    dataType: 'json',
                    success: function (data, textStatus, xhr) {

                        if (xhr.status == 200) {

                            let product_name = $("#product_name").val();
                            let cat = $("#category option:selected").html();
                            let rate = $("#rate").val();
                            let unit = $("#unit option:selected").html();
                            let detail = $("#detail").val();

                            let short_code = $("#short_code").val();
                            let product_status = $("#product_status").val();

                            $('#saveBtn').html('Save Changes');
                            if (!doEdit) {

                                toastr.success('Added !','Your Product has been Added.' , {timeOut: 5000});

                                // Swal.fire(
                                //     'Added !',
                                //     'Your Product has been Added.',
                                //     'success'
                                // );

                                location.reload();

                                let dummyDataSource = productDataTable.row(0);

                                productDataTable.row.add([
                                    '0',
                                    product_name,
                                    cat,
                                    rate+"/"+unit,
                                    detail,
                                    short_code,
                                    currentUser,
                                    '<a href="javascript:void(0)" title="Edit" data-toggle="tooltip" data-id="' +
                                    data.id +
                                    '" data-original-title="Edit" class="edit btn bg-gradient-primary btn-xs editProduct">' +
                                    '<i class="far fa-edit"></i></a>' +
                                    '<a href="javascript:void(0)" title="Delete" data-toggle="tooltip" data-id="' +
                                    data.id +
                                    '" data-original-title="Delete" class="btn bg-gradient-danger btn-xs deleteProduct">' +
                                    '<i class="fas fa-trash"></i></a>'
                                ]).draw(false);

                                manageIndex();

                            } else {

                                toastr.success('Updated !','Your Product has been Updated.' , {timeOut: 5000});
                                // Swal.fire(
                                //     'Updated !',
                                //     'Your Product has been Updated.',
                                //     'success'
                                // );
                                //location.reload();
                                $(selectedRow).children().eq(1).html(product_name);
                                $(selectedRow).children().eq(2).html(cat);
                                $(selectedRow).children().eq(3).html(rate+"/"+unit);
                                //$(selectedRow).children().eq(4).html(unit);
                                $(selectedRow).children().eq(4).html(detail);

                                $(selectedRow).children().eq(5).html(short_code);
                                //$(selectedRow).children().eq(5).html(detail);
                            }
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        if (xhr.status != 200) {
                            let responses = JSON.parse(xhr.responseText);
                            if (responses.errors != undefined) {
                                if (responses.errors.product_name) {
                                    console.log("Error in Product Name");
                                }
                            }
                        }
                        $('#saveBtn').html('Save Changes');
                    },
                    complete: function (xhr, textStatus) {
                        if (xhr.status != 200) {
                            let responses = JSON.parse(xhr.responseText);
                            if (responses.errors != undefined) {
                                if (responses.errors.product_name) {
                                    $("#product_name_error").html(responses.errors
                                        .product_name);
                                }
                                if (responses.errors.rate) {
                                    $("#rate_error").html(responses.errors.rate);
                                }
                                if (responses.errors.unit) {
                                    $("#unit_error").html(responses.errors.unit);
                                }
                                if (responses.errors.category_error) {
                                    $("#category_error").html(responses.errors.category_error);
                                }
                            }
                        }
                        $(this).html('Save Changes');
                    }
                });
            });


            $('body').on('click', '.deleteProduct', function () {

                let product_id = $(this).data("id");

                selectedRow = "";
                selectedRow = $(this).parents('tr');

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
                            url: "{{ route('products.store') }}" + '/' + product_id,
                            success: function (data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your Product has been deleted.',
                                    'success'
                                );

                                productDataTable
                                    .row(selectedRow)
                                    .remove()
                                    .draw();

                                //productDataTable
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
