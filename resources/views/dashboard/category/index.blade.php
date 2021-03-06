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
        <h3 class="card-title">All Category</h3>
        <button id="createNewCategory" type="button" class="btn bg-gradient-white btn-sm float-right">
            <i class="fas fa-plus"></i> Category
        </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered data-table" id="basic_datatable">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Category Name</th>
                    <th>Company Name</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $serial =1;
                @endphp

                @foreach($categories as $category)
                <tr>
                    <td>{{$serial++}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->remarks}}</td>
                    <td>{{$category->creator->name}}</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" title="Edit" data-toggle="tooltip" data-id="{{$category->id}}"
                            data-original-title="Edit" class="edit btn bg-gradient-primary btn-xs editCategory"> <i
                                class="far fa-edit"></i></a>
                        <a href="javascript:void(0)" title="Delete" data-toggle="tooltip" data-id="{{$category->id}}"
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
                <form id="categoryForm" name="categoryForm" class="form-horizontal">
                    <input type="hidden" name="category_id" id="category_id">

                    <div class="form-group">
                        <label for="category_name" class="col-sm-6 control-label">Category Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                placeholder="Category Name" value="" maxlength="50" required="">
                            <span id="category_name_error" class="text-danger"></span>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 control-label">Company Name</label>
                        <div class="col-sm-12">
                            {{--                            <textarea id="remarks" name="remarks" required="" placeholder="Enter Remarks"--}}
                            {{--                                class="form-control"></textarea>--}}

                            <input type="text" class="form-control" id="remarks" name="remarks"
                                placeholder="Company Name" value="" maxlength="50" required="">

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

        $('#createNewCategory').click(function () {
            doEdit = false;
            selectedCategory = 0;
            $('#saveBtn').val("create-category");
            $('#category_id').val('');
            $('#categoryForm').trigger("reset");
            $('#modalHeading').html("Create New Category");
            $('#ajaxModel').modal('show');
        });

        let selectedRow;

        $('body').on('click', '.editCategory', function () {

            var category_id = $(this).data('id');
            selectedCategory = category_id;

            selectedRow = $(this).closest('tr');

            $('#modalHeading').html("Edit Category");

            axios.get("{{ route('category.index') }}" + '/' + category_id + '/edit')
                .then(function (response) {
                    //console.log(response);
                    $('#ajaxModel').modal('show');
                    $('#category_id').val(response.data.id);
                    $('#category_name').val(response.data.category_name);
                    $('#remarks').val(response.data.remarks);
                    doEdit = true;
                }).catch(function (error) {
                    console.log(error);
                }).then(function () {
                    // always executed
                });
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();

            $("#category_name_error").html("");

            $(this).html('Sending..');

            let createUrl = "{{ route('category.store')}}";
            let updateUrl = "{{ route('category.update',0)}}";

            let newUpdateUrl = updateUrl.replace('0', selectedCategory);
            let actionUrl = ((!doEdit) ? createUrl : newUpdateUrl);

            $.ajax({
                data: $('#categoryForm').serialize(),
                url: actionUrl,
                type: ((!doEdit) ? "POST" : "PUT"),
                dataType: 'json',
                success: function (data, textStatus, xhr) {
                    if (xhr.status == 200) {

                        if (!doEdit) {
                            location.reload();
                        } else {
                            $(selectedRow).children().eq(1).html($("#category_name").val());
                            $(selectedRow).children().eq(2).html($("#remarks").val());
                        }
                        $('#categoryForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                    }
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    $("#category_name_error").html(err.errors.category_name);
                    $('#saveBtn').html('Save Changes');
                }
            });

        });

        $('body').on('click', '.deleteCategory', function () {

            var category_id = $(this).data("id");

            if (confirm("Are You sure want to delete !")) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('category.store') }}" + '/' + category_id,
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
