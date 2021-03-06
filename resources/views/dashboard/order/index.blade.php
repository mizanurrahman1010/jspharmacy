@extends('layouts.dashboard')

@section('css')
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{asset('public/plugins/sweetalert2/sweetalert2.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">

    <style type="text/css">
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
@endsection

@section('content')

    @php
        $uri = request()->segments(0);
        $isNewOrder = (($uri[0]=="orderlist")? (($uri[1] == "new")?true:false):false);

        $status = "";
        $statusTitle = "";
        if(Auth::user()->checkUserType() == 'delivery_man'){
            if($uri[1]=="new"){
                $status = "processing";
                $statusTitle = "Order Accept";
            }
            elseif ($uri[1]=="accepted"){
                $status = "ready";
                $statusTitle = "Mark As Ready";
            }
            elseif($uri[1]=="processing"){
                $status = "delivered";
                 $statusTitle = "Mark Order Delivered";
            }
        }
    @endphp

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
                    @if(Auth::user()->checkUserType() != 'customer')
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    @endif
                    <th>Amount</th>
                    <th>Order Placed</th>
                    <th>Order Assigned</th>
                    @if(Auth::user()->checkUserType() == 'customer')
                        <th class="text-center">Status</th>
                    @endif
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$order->order_code}}</td>
                        @if(Auth::user()->checkUserType() != 'customer')
                            <td>{{$order->customer->name}}</td>
                            <td>{{$order->delivery_mobile}}</td>
                            <td>{{$order->delivery_address}}</td>
                        @endif
                        <td>
                            @php
                                $mrp = 0;
                                foreach ($order->orderItems as $products) {
                                $mrp+= $products->mrp;
                                }
                            @endphp
                            {{number_format($mrp,2)}}
                        </td>
                        <td>{{$order->created_at->diffForHumans()}}</td>
                        <td class="text-center">{{($order->shipped_at!=null)?$order->shipped_at->diffForHumans():"N/A"}}</td>
                        @if(Auth::user()->checkUserType() == 'customer')
                            <td class="text-center">{{ucfirst($order->status)}}</td>
                        @endif
                        <td class="no-sort text-center align-middle">
                            <div class="btn-group " role="group" aria-label="Button Group">
                                @php
                                    $disabled = (($order->shipped_by != null) || ($order->shipped_at != null))?"disabled":"";
                                @endphp
                                @if(Auth::user()->checkUserType() == 'admin')
                                    @if($order->prescription_image!=null AND $uri[1]=="new")
{{--                                        <a target="_blank" href="{{route('prescription.order',$order->id)}}" type="button"--}}
{{--                                           title="Order From Prescription" data-toggle="tooltip"--}}
{{--                                           data-id="{{$order->id}}" data-prescription="{{$order->prescription_image}}"--}}
{{--                                           data-original-title="Order From Prescription"--}}
{{--                                           class="btn bg-gradient-success btn-xs ml-1">--}}
{{--                                            <i class="fas fa-file-prescription"></i>--}}
{{--                                        </a>--}}


                                        <button data-url="{{route('prescription.order',$order->id)}}" type="button"
                                           title="Order From Prescription" data-toggle="tooltip"
                                           data-original-title="Order From Prescription"
                                           class="btn bg-gradient-success btn-xs ml-1 prescriptionOrder">
                                            <i class="fas fa-file-prescription"></i>
                                        </button>

                                    @endif

                                    <button type="button" title="Order Details" data-toggle="tooltip"
                                            data-id="{{$order->id}}"
                                            data-original-title="Order Details"
                                            class="btn bg-gradient-success btn-xs orderDetail ml-1">
                                        <i class="fas fa-file"></i>
                                    </button>


                                    @if(($uri[1]!="delivered") && ($uri[1]!="cancelled"))
                                        <button type="button" title="Assign Delivery Man" data-toggle="tooltip"
                                                data-id="{{$order->id}}" data-original-title="Assign Delivery Man"
                                                class="btn bg-gradient-warning btn-xs orderDelivery ml-1">
                                            <i class="fas fa-truck"></i>
                                        </button>
                                    @endif
                                    <button type="button" title="Cancel Order" data-toggle="tooltip"
                                            data-id="{{$order->id}}" data-original-title="Cancel Order"
                                            class="btn btn-xs bg-gradient-danger orderCancel ml-1">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <a href="{{route('order.pdf',$order->id)}}" target="_blank" title="Print"
                                       data-toggle="tooltip"
                                       data-id="{{$order->id}}" data-original-title="Print"
                                       class="edit btn bg-gradient-cyan btn-xs orderPrint ml-1">
                                        <i class="fas fa-print"></i>
                                    </a>
                                @elseif(Auth::user()->checkUserType() == 'delivery_man')
                                    @if($uri[1]!="delivered")
                                        <button data-status="{{$status}}" type="button" title="{{$statusTitle}}"
                                                data-toggle="tooltip"
                                                data-id="{{$order->id}}" data-original-title="{{$statusTitle}}"
                                                class="btn bg-gradient-success btn-xs orderProcess ">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    @endif
                                    <a href="{{route('order.pdf',$order->id)}}" target="_blank" title="Order Details"
                                       data-toggle="tooltip"
                                       data-id="{{$order->id}}" data-original-title="Order Details"
                                       class="edit btn bg-gradient-danger btn-xs orderPrint">
                                        <i class="fas fa-print"></i>
                                    </a>
                                @else
                                    <a href="{{route('order.pdf',$order->id)}}" target="_blank" title="Order Details"
                                       data-toggle="tooltip"
                                       data-id="{{$order->id}}" data-original-title="Order Details"
                                       class="edit btn bg-gradient-danger btn-xs orderPrint">
                                        <i class="fas fa-print"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
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
                <div class="modal-body" style="overflow: scroll;">
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

                    <div class="row justify-content-md-center">

                        <div class="form-group">
                            <div class="col-sm-12">
                                <img id="prescription-image" class="img-bordered img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        <textarea id="order_note" name="order_note" placeholder=" Notes"
                                  class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @php
                        $disable_accept = (($uri[0]=="orderlist")? (($uri[1] == "accepted")?"disabled":""):"");
                        $disable_cancelled = (($uri[0]=="orderlist")? (($uri[1] == "cancelled")?"disabled":""):"");
                    @endphp
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
                                <option selected value="">Select Delivery Man</option>
                                @foreach($delivery_man_list as $man)
                                    <option data-mobile="<?=$man->mobile?>"
                                            value="<?=$man->id?>"><?=$man->name?></option>
                                @endforeach
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
                    <button {{$disable_cancelled}} type="button" class="btn btn-danger" id="btn_orderDelivery">
                        <i class="fas fa-truck"></i>
                        Assign Delivery Man
                    </button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



@endsection


@push('javascript')
    <!-- DataTables -->
    <script src="{{asset('public/plugins/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>

@endpush


@push('script')

    <script type="text/javascript">
        $(function () {

            let prescriptionImagePath = "{{asset('public/prescriptions/')}}";

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
            let unitList = [];

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
                $.each(unitList, function (key, item) {
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
                $("#orderDetails tbody").html("");
                if (orderItems.length > 0) {
                    //$("#orderDetails tbody").html("");
                    itemsInOrder = [];

                    let serial = 1;
                    let totalTaka = 0;
                    let deliveryCost = 0;

                    $.each(orderItems, function (key, value) {

                        value.productName = getProductName(value.product_id);
                        value.unitName = getUnitName(value.unit)

                        value.rate = parseFloat(value.rate).toFixed(2);
                        value.mrp = parseFloat(value.mrp).toFixed(2);

                        itemsInOrder.push(value);
                        let tblRow = '<tr class="item_row">' +
                            '<td>' + (serial++) + '</td>' +
                            '<td class="pro_name">' + value.productName + '</td>' +
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
                        '<td colspan="2" class="text-right">' + Math.round(totalTaka).toFixed(2) +
                        '</td><td></td>' +
                        '</tr>';

                    total_taka = Math.round(totalTaka + deliveryCost);

                    tblEnd += '<tr class="text-info">' +
                        '<td class="text-center" colspan="5">In Word : ' + convertAmount(total_taka) +
                        '</td><td></td>' +
                        '</tr>';
                    $("#orderDetails tbody").append(tblEnd);
                }
            }

            function statusManage(status) {
                let match = false;
            }


            $('body').on('click', '.orderDetail', function () {
                let order_id = $(this).data('id');
                selectedOrderId = order_id
                let url = "{{ route('order.details')}}";

                axios.get(url + "/" + order_id)
                    .then(function (response) {

                        $("#detailModalHeading").html("Details of Order Code : " + response.data[0][0].order_code);
                        orderItems = response.data[0][0].order_items;
                        productList = response.data[1];
                        unitList = response.data[2];

                        let customer = (response.data[0][0].customer.user_type == 'admin') ? "" : response.data[0][0].customer.name;

                        $("#customer_name").html(customer);
                        $("#mobile").html(response.data[0][0].delivery_mobile);

                        let address = '<address class="p-0 m-0 text-blue">' + response.data[0][0].delivery_address + '</address>';

                        $("#prescription-image").attr("src", prescriptionImagePath + '/' + response.data[0][0].prescription_image);

                        if(response.data[0][0].prescription_image!=null){
                            $("#prescription-image").show();
                        }else {
                            $("#prescription-image").hide();
                        }

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
                let url = "{{ route('order.accept')}}";

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


            $('body').on('click', '.orderCancel', function () {
                let order_id = $(this).data('id');
                selectedOrderId = order_id

                if (confirm("Really Want to Cancel ?")) {
                    let url = "{{ route('order.cancel')}}";
                    axios.post(url, {
                        orderId: selectedOrderId
                    }).then(function (response) {

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


            $("body").on('click', '.orderProcess', function (e) {
                let order_id = $(this).data('id');
                selectedOrderId = order_id

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.value) {
                        let status = $(this).data('status');
                        let url = "{{route('order.process')}}";
                        axios.post(url, {
                            orderId: selectedOrderId,
                            orderStatus: status
                        }).then(function (response) {
                            if (parseInt(response.status) === 200) {
                                Swal.fire(
                                    'Status Changed!',
                                    response.data.success,
                                    'success'
                                )
                                location.reload();
                            }
                        }).catch(function (error) {
                            //console.log("Error", error);
                        }).then(function (error) {
                            //console.log("Always", error);
                            // always executed
                        });
                    }
                })
            })


            $('body').on('change', '#delivery_by', function (e) {
                var mob = $("#delivery_by").select2().find(":selected").data("mobile");
                $("#delivery_man_mobile_no").val(mob);
            });

            $('body').on('click', '.orderDelivery', function () {
                selectedOrderId = $(this).data('id');
                $("#delivery_by").val("");
                $("#delivery_man_mobile_no").val("");
                $("#deliveryModal").modal('show');
            });

            $('#deliveryModal').on('shown.bs.modal', function (e) {
                $('.select2bs4').select2({
                    dropdownParent: $(this).parent()
                });
            });

            $("body").on('click', '#btn_orderDelivery', function () {
                let delivery_by = $("#delivery_by").val();
                let delivery_man_mobile_no = $("#delivery_man_mobile_no").val();
                let url = "{{ route('order.delivery')}}";

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



            $(".prescriptionOrder").on('click',function () {
                let orderUrl = $(this).data('url');
                let params = [
                    'height='+screen.height,
                    'width='+screen.width,
                    'fullscreen=yes'
                ].join(',');

                let popup = window.open(orderUrl, 'popup_window', params);
                popup.moveTo(0,0);
            });

        });

    </script>
@endpush
{{-- </html> --}}
