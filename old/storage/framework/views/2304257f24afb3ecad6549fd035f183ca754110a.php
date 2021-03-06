<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">

<!-- summernote -->
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/summernote/summernote-bs4.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
                <?php
                $serial =1;
                ?>

                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($serial++); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->mobile); ?></td>
                    <td>
                        <address class="m-0 p-0">
                            House : <?php echo e($item->perm_add_house); ?><br>
                            Road : <?php echo e($item->perm_add_road); ?><br>
                            Ward : <?php echo e($item->perm_add_ward); ?><br>
                            Para : <?php echo e($item->perm_add_para); ?><br>
                            District / City : <?php echo e($item->perm_add_dist_city); ?>

                        </address>
                    </td>
                    <td><?php echo e(ucwords(str_replace('_',' ',$item->user_type,))); ?></td>
                    <td class="text-center">
                        <a href="javascript:void(0)" title="Edit" data-toggle="tooltip" data-id="<?php echo e($item->id); ?>"
                            data-original-title="Edit" class="edit btn bg-gradient-primary btn-xs editEmployee"> <i
                                class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0)" title="Delete" data-toggle="tooltip" data-id="<?php echo e($item->id); ?>"
                            data-original-title="Delete" class="btn bg-gradient-danger btn-xs deleteEmployee"> <i
                                class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>


<?php $__env->startPush('javascript'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('public/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>

<!-- Summernote -->
<script src="<?php echo e(asset('public/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

<script type="text/javascript">
    $(function () {

        $("#basic_datatable").DataTable();

        let currentAction;

        $("#createEmployee").on('click', function () {
            $('.alert-danger').hide();
            currentAction = 'create';
            let url = "<?php echo e(route('employee.create')); ?>";

            axios.get(url, {}).then(function (response) {
                $("#employeeModalBody").html(response.data);

                if (parseInt(response.status) === 200) {
                    $("#employeeModal").modal('show');
                    $("#employeeModalHeading").html("Create New Employee");
                }
            }).catch(function (error) {
                //console.log("Error", error);

            }).then(function (error) {
                //console.log("Always", error);
                // always executed
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
                perm_add_house: $("#perm_add_house").val(),
                perm_add_road: $("#perm_add_road").val(),
                perm_add_ward: $("#perm_add_ward").val(),
                perm_add_para: $("#perm_add_para").val(),
                perm_add_district_city: $("#perm_add_district_city").val(),
                user_type: $("#user_type").val()
            }).then(function (response) {
                $('.alert-danger').html('');
                $('.alert-danger').hide();
                if (response.data.error.length > 0) {
                    jQuery.each(response.data.error, function (key, value) {
                        $('.alert-danger').show();
                        $('.alert-danger').append('<li>' + value + '</li>');
                    });
                }
            }).catch(function (error) {
                //console.log("Error", error);

            }).then(function (error) {
                //console.log("Always", error);
                // always executed
            });
        });

        $(".order_status").on('click', function () {

            let order_id = $(this).data('id');
            selectedOrderId = order_id

            let status = $(this).data('status');
            let url = "<?php echo e(route('order.process')); ?>";

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

    });

</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/employee/index.blade.php ENDPATH**/ ?>