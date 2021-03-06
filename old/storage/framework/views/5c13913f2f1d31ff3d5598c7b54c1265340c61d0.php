<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">

<!-- summernote -->
<link rel="stylesheet" href="<?php echo e(asset('public/plugins/summernote/summernote-bs4.css')); ?>">

<style type="text/css">
    a.disabled {
        pointer-events: none;
        cursor: default;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
$serial =1;
$uri = request()->segments(0);
$isNewOrder = (($uri[0]=="orderlist")? (($uri[1] == "new")?true:false):false);
?>

<div class="card">
    <div class="card-header bg-info">
        <h3 class="card-title">All Orders</h3>
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">


        <table class="table table-bordered data-table table-responsive-sm" id="basic_dataTable">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Order Code</th>
                    <th>Customer Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Amount</th>
                    <th>Order Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($serial++); ?></td>
                    <td><?php echo e($item->order_code); ?></td>
                    <td><?php echo e($item->customer->name); ?></td>
                    <td><?php echo e($item->delivery_mobile); ?></td>
                    <td>
                        House : <?php echo e($item->delivery_house); ?><br>
                        Road : <?php echo e($item->delivery_road); ?><br>
                        Ward : <?php echo e($item->delivery_ward); ?><br>
                        Para : <?php echo e($item->delivery_para); ?><br>
                        District / City: <?php echo e($item->delivery_district_city); ?>

                    </td>
                    <td>
                        <?php
                        $mrp = 0;
                        foreach ($item->orderItems as $products) {
                        $mrp+= $products->mrp;
                        }
                        ?>
                        <?php echo e(number_format($mrp,2)); ?>

                    </td>
                    <td><?php echo e(date($item->created_at)); ?></td>
                    <td class="no-sort text-center">
                        <?php
                        $disabled = (($item->shipped_by != null) || ($item->shipped_at != null))?"disabled":"";
                        ?>

                        <button <?php echo e($disabled); ?> type="button" title="Details" data-toggle="tooltip"
                            data-id="<?php echo e($item->id); ?>" data-original-title="Details"
                            class="btn bg-gradient-info btn-xs orderDetail">
                            <i class="fas fa-file-alt"></i>
                        </button>

                        <?php if(Auth::user()->checkUserType() == 'admin'): ?>
                        <?php if($uri[1] == "accepted"): ?>
                        <button <?php echo e($disabled); ?> type="button" title="Delivery" data-toggle="tooltip"
                            data-id="<?php echo e($item->id); ?>" data-original-title="Delivery"
                            class="btn bg-gradient-warning btn-xs orderDelivery ">
                            <i class="fas fa-truck"></i>
                        </button>

                        <a href="<?php echo e(route('order.pdf',$item->id)); ?>" target="_blank" title="Print" data-toggle="tooltip"
                            data-id="<?php echo e($item->id); ?>" data-original-title="Print"
                            class="edit btn bg-gradient-danger btn-xs orderPrint">
                            <i class="fas fa-print"></i>
                        </a>
                        <?php endif; ?>


                        <?php
                        $statuses = array(
                        //'new'=>'New Order',
                        //'accepted'=>'Accept Order',
                        //'cancelled'=>'Cancel Order',
                        'processing'=>'Order Processing',
                        'ready'=>'Order Ready',
                        //'rider'=>'Order Transfer To Rider',
                        'delivered'=>'Order Delivered To Customer'
                        );
                        ?>

                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-sm m-1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Change Order Status
                            </button>
                            <div id="btnOrderStatus" class="dropdown-menu dropdown-menu-right">
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button data-id="<?php echo e($item->id); ?>" data-status="<?php echo e($status); ?>"
                                    class="dropdown-item order_status" type="button"><?php echo e($value); ?></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<div class="modal fade" id="detailsModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="detailModalHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <address>
                    <h6 class="text-info">
                        <strong id="customer_name"></strong>
                    </h6>
                    Address: <span id="address"></span>
                    Phone: <span class="text-danger" id="mobile"></span>
                </address>

                <table id="orderDetails" class="table bg-white table-sm table-responsive-sm">
                    <thead>
                        <tr class="text-center">
                            <th>Serial</th>
                            <th>Product Name</th>
                            
                            <th>Rate</th>
                            <th>Quantity</th>
                            <th>MRP</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>

                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea id="order_note" name="order_note" placeholder=" Notes"
                            class="form-control"></textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <?php
                $disable_accept = (($uri[0]=="orderlist")? (($uri[1] == "accepted")?"disabled":""):"");
                $disable_cancelled = (($uri[0]=="orderlist")? (($uri[1] == "cancelled")?"disabled":""):"");
                ?>

                <?php if(Auth::user()->checkUserType() == 'admin'): ?>

                


                <?php if(($uri[1] == "accepted") || ($uri[1] == "new")): ?>
                <button type="button" class="btn btn-primary" id="btn_order_accept">
                    <i class="fas fa-check"></i>
                    Order Accept
                </button>

                <button <?php echo e($disable_cancelled); ?> type="button" class="btn btn-danger" id="btn_order_cancel">
                    <i class="fas fa-backspace"></i>
                    Order Cancel
                </button>
                <?php endif; ?>

                <?php endif; ?>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deliveryModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog  ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order Delivery </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label for="delivery_by">Delivery By</label>
                        
                        

                        <select id="delivery_by" name="delivery_by" class="form-control" placeholder="Delivery By">
                            <?php $__currentLoopData = $delivery_man_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $man): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                    </div>
                    <div class="form-group">
                        <label for="delivery_man_mobile_no">Delivery Man Mobile No</label>
                        <input type="text" class="form-control" id="delivery_man_mobile_no"
                            placeholder="Delivery Man Mobile No" name="delivery_man_mobile_no">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button <?php echo e($disable_cancelled); ?> type="button" class="btn btn-danger" id="btn_orderDelivery">
                    <i class="fas fa-truck"></i>
                    Order Delivery
                </button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#basic_dataTable").dataTable({
            responsive: true
        });

        let orderItems = [];
        let productList = [];
        let unittList = [];

        let selectedOrderId = 0;

        function getProductName(id) {
            let product_name = "";
            $.each(productList, function (key, item) {
                if (item.products[0].id == id) {
                    product_name = (item.products[0].product_name);
                    return false;
                }
            });
            return product_name;
        }

        function getUnitName(pid) {
            let unitName = "";
            $.each(unittList, function (key, item) {
                //console.log(pid, item);
                if (item.id == pid) {
                    unitName = (item.unit_name);
                    return false;
                }
            });
            return unitName;
        }

        let itemsInOrder = [];

        function drawTable() {

            if (orderItems.length > 0) {
                $("#orderDetails tbody").html("");
                itemsInOrder = [];

                let serial = 1;
                let totalTaka = 0;
                let deliveryCost = 0;

                $.each(orderItems, function (key, value) {
                    //console.log(value);
                    value.productName = getProductName(value.product_id);
                    value.unitName = getUnitName(value.unit)

                    value.rate = parseFloat(value.rate).toFixed(2);
                    value.mrp = parseFloat(value.mrp).toFixed(2);

                    itemsInOrder.push(value);
                    let tblRow = '<tr class="item_row">' +
                        '<td>' + (serial++) + '</td>' +
                        '<td class="pro_name">' + value.productName + '</td>' +
                        // '<td class="text-center"><input value="' + ((value.batch === null) ? "" : value
                        //     .batch) +
                        // '" style="width:80px; height:22px; " class=" batch form-control form-control-sm" type="text"></td>' +
                        // '<td class="text-center"><input value="' + ((value.expired === null) ? "" :
                        //     value.expired) +
                        // '" style="width:100px; height:22px; " class=" expired form-control form-control-sm" type="text"></td>' +
                        '<td class="text-right">' + value.rate + ' / ' + value.unitName + '</td>' +
                        '<td class="text-center">' + value.quantity + '</td>' +
                        '<td class="text-right">' + value.mrp + '</td>' +
                        '</tr>';
                    totalTaka += parseFloat(value.mrp);
                    if (value.mrp > 0) {
                        $("#orderDetails tbody").append(tblRow);
                    }
                });

                let tblEnd = '<tr>' +
                    '<td class="text-right" colspan="3">Total Taka : </td>' +
                    '<td colspan="2" class="text-right">' + totalTaka.toFixed(2); +
                '</td><td></td>' +
                '</tr>';

                // tblEnd += '<tr>' +
                //     '<td class="text-right" colspan="5">Discount : </td>' +
                //     '<td colspan="2" class="text-right"> Free Delivery</td><td></td>' +
                //     '</tr>';

                // tblEnd += '<tr>' +
                //     '<td class="text-right" colspan="5">Delivery Cost : </td>' +
                //     '<td colspan="2" class="text-right">' + deliveryCost.toFixed(2) + '</td><td></td>' +
                //     '</tr>';

                // tblEnd += '<tr>' +
                //     '<td class="text-right" colspan="5">Total Taka : </td>' +
                //     '<td colspan="2" class="text-right">' + (totalTaka + deliveryCost).toFixed(2) + '</td><td></td>' +
                //     '</tr>';

                total_taka = (totalTaka + deliveryCost);

                tblEnd += '<tr class="text-info">' +
                    '<td class="text-center" colspan="5">In Word : ' + convertAmount(total_taka) +
                    '</td><td></td>' +
                    '</tr>';
                $("#orderDetails tbody").append(tblEnd);
            }
        }

        function statusManage(status) {
            let match = false;
            /*$.each($("#btnOrderStatus button"), function (key, val) {
                $(val).prop("disabled", !match);
                if ($(val).data('status') == status) {
                    match = true;
                }
            });*/
        }

        $('body').on('click', '.orderDetail', function () {
            let order_id = $(this).data('id');
            selectedOrderId = order_id

            let url = "<?php echo e(route('order.details')); ?>";

            axios.get(url + "/" + order_id)
                .then(function (response) {
                    //console.log(response);

                    $("#detailModalHeading").html("Details of Order Code : " + response.data[0][0]
                        .order_code);

                    orderItems = response.data[0][0].order_items;
                    productList = response.data[1];
                    unittList = response.data[2];

                    let customer = (response.data[0][0].customer.user_type == 'admin') ? "" :
                        response.data[0][0].customer.name;
                    //$("#customer_name").html(response.data[0][0].delivery_to);
                    $("#customer_name").html(customer);
                    $("#mobile").html(response.data[0][0].delivery_mobile);

                    let address = '<address class="p-0 m-0 text-blue">';

                    address += "House # " + response.data[0][0].delivery_house
                    address += ", Road # " + response.data[0][0].delivery_road
                    address += "<br> Ward # " + response.data[0][0].delivery_ward
                    address += ", Para # " + response.data[0][0].delivery_para
                    address += "<br>District / City " + response.data[0][0].delivery_district_city
                    address += "</address>";

                    $("#address").html(address);
                    $("#order_note").val(response.data[0][0].delivery_note);

                    drawTable();
                    $("#detailsModal").modal("show");

                    statusManage(response.data[0][0].status);
                    //alert(response.data[0][0].status);
                }).catch(function (error) {
                    // handle error
                    //console.log(error);
                }).then(function () {
                    // always executed
                });
        });

        $('#detailsModal').on('shown.bs.modal', function () {

            $('.expired').datepicker();
            $('.datepicker').css('z-index', '1600');

        });

        $('body').on('click', '#btn_order_accept', function () {

            let tableItemRows = $("#orderDetails tbody tr.item_row");

            $.each(tableItemRows, function (k, item) {
                if ($(item).find('.pro_name').html() == itemsInOrder[k].productName) {
                    itemsInOrder[k].batch = $(item).find('.batch').val();
                    itemsInOrder[k].expired = $(item).find('.expired').val();
                    delete itemsInOrder[k].created_at;
                    delete itemsInOrder[k].deleted_at;
                    delete itemsInOrder[k].updated_at;
                    delete itemsInOrder[k].mrp;
                    delete itemsInOrder[k].product_id;
                    delete itemsInOrder[k].productName;
                    delete itemsInOrder[k].unit;
                    delete itemsInOrder[k].rate;
                    delete itemsInOrder[k].quantity;
                }
            });

            let url = "<?php echo e(route('order.accept')); ?>";

            axios.post(url, {
                items: itemsInOrder,
                orderId: selectedOrderId
            }).then(function (response) {
                if (parseInt(response.status) === 200) {
                    location.reload();
                }
            }).catch(function (error) {
                alert(parseInt(error.response.status));

            }).then(function () {
                // always executed
            });
        });


        $('body').on('click', '#btn_order_cancel', function () {
            if (confirm("Really Want to Cancel ?")) {
                let url = "<?php echo e(route('order.cancel')); ?>";
                axios.post(url, {
                    orderId: selectedOrderId
                }).then(function (response) {
                    console.log("Success " + response);
                    if (parseInt(response.status) === 200) {
                        location.reload();
                    }
                }).catch(function (error) {
                    console.log("Error " + error);
                    if (error.response.status == 200) {
                        location.reload();
                    }
                });
            }
        });

        $('body').on('click', '.orderDelivery', function () {
            selectedOrderId = $(this).data('id');
            $("#delivery_by").val("");
            $("#delivery_man_mobile_no").val("");
            $("#deliveryModal").modal('show');
        });

        $("body").on('click', '#btn_orderDelivery', function () {

            let delivery_by = $("#delivery_by").val();
            let delivery_man_mobile_no = $("#delivery_man_mobile_no").val();


            let url = "<?php echo e(route('order.delivery')); ?>";

            axios.post(url, {
                delivery_by: delivery_by,
                delivery_man_mobile_no: delivery_man_mobile_no,
                orderId: selectedOrderId
            }).then(function (response) {
                //console.log("Success ", response);
                if (parseInt(response.status) === 200) {
                    location.reload();
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


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/order/index.blade.php ENDPATH**/ ?>