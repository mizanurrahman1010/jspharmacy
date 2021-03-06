<?php
$order_code = strtoupper("JSP" .date("y"). str_pad((date('z') + 1), 3, "0", STR_PAD_LEFT) . "" . substr(uniqid(), 3,
-4));
?>


<script type="text/javascript">
    $(function () {
        let unitList = [];
        //alert(unitList.length);

        let isLogedIn = "<?php echo e((Auth::user()) ? 1 : 0); ?>";

        let orderItems = [];
        let selectedItemIndex = 0;
        let isDuplicateOrder = false;
        let orderCode = '<?php echo e($order_code); ?>';

        function getUnitName(id) {
            let unitName = "";

            $.each(unitList, function (key, item) {
                if (id == item.id) {
                    unitName = item.unit_name;
                    return false;
                }
            });
            return unitName;
        }

        function loadProduct() {
            $("#quantity").val(1);
            let cat = $("#category").val();
            $("#product").empty();

            let url = "<?php echo e(route('products.categorywise')); ?>";

            axios.get(url + '/' + cat)
                .then(function (response) {
                    //console.log(response);
                    unitList = response.data[1];
                    if (response.data[0].length > 0) {
                        $.each(response.data[0], function (key, value) {
                            let newOption = new Option(value.product_name, value.id, false, false);
                            newOption.setAttribute('data-rate', value.rate);
                            newOption.setAttribute('data-unit', value.unit);
                            $("#product").append(newOption).trigger("change");
                        });
                    }
                }).catch(function (error) {
                    console.log(error);
                }).then(function () {
                    if (orderItems.length > 0) {
                        $("#product").val(orderItems[selectedItemIndex].id).trigger('change');
                    }
                });
        }

        loadProduct();


        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });

        // $('select').select2({
        //     width: '100%'
        // });


        $("#category").on("change", function (e) {
            loadProduct();
        });

        $("#product").on("change", function (e) {
            //$("#quantity").val(1);
        });

        let orderWithPrescription = false;

        $('#prescription').on('change', function () {
            //var ext = this.value.match(/\.(.+)$/)[1];
            var ext = this.value.split('.').pop();
            switch (ext) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                    $("#btn_next_step").attr('disabled', (isLogedIn === 0));
                    orderWithPrescription = true;
                    if (isLogedIn === 0) {
                        $("#userLoginModal").modal('show');
                    }
                    break;
                default:
                    //alert('This is not an allowed file type.');
                    $("#btn_next_step").attr('disabled', true);
                    orderWithPrescription = false;
                    this.value = '';
            }
        });

        $("#btn_next_step").attr('disabled', true);

        function manageItems() {
            let item = new Object();
            let category = $('#category').select2('data')[0].text;
            let cat_id = $('#category').val();

            let id = $('#product').val();
            let product = $('#product').select2('data')[0].text;
            let rate = $("#product").select2().find(":selected").data("rate");
            let unit = $("#product").select2().find(":selected").data("unit");
            let qty = $("#quantity").val();

            item = {
                cat_id: cat_id,
                category: category,
                id: id,
                product: product,
                batch: "",
                exp: "",
                rate: rate,
                unit: unit,
                qty: qty,
                mrp: (rate * qty)
            }

            let isExists = false;

            $.each(orderItems, function (key, value) {
                if (value.id == item.id) {
                    isExists = true;
                    orderItems[key] = item;
                }
            });

            if (!isExists) {
                orderItems.push(item);
            }
            drawTable();
        }

        function drawTable() {
            $("#btn_next_step").attr('disabled', ((orderItems.length > 0) ? false : true));

            $("#orderTable tbody").html("");

            let serial = 1;
            let totalTaka = 0;
            let deliveryCost = 0;
            $.each(orderItems, function (key, value) {
                console.log(value.unit);
                let tblRow = '<tr>' +
                    '<td>' + (serial++) + '</td>' +
                    '<td>' + value.product + '</td>' +
                    '<td></td>' +
                    '<td></td>' +
                    '<td class="text-right">' + value.rate.toFixed(2) + ' / ' + getUnitName(value
                        .unit) +
                    '</td>' +
                    '<td class="text-center">' + value.qty + '</td>' +
                    '<td class="text-right">' + value.mrp.toFixed(2) + '</td>' +
                    '<td class="text-center">' +
                    '<button type="button" data-id="' + key +
                    '" class="btn bg-primary text-white btn-sm edit-item"> <i class="far fa-edit"></i></button> ' +
                    '<button type="button" data-id="' + key +
                    '" class="btn bg-danger text-white btn-sm delete-item"> <i class="fas fa-trash"></i></button>' +
                    '</td>' +
                    '</tr>';
                totalTaka += value.mrp;
                if (value.mrp > 0) {
                    $("#orderTable tbody").append(tblRow);
                }
            });

            if (orderItems.length > 0) {
                let tblEnd = '<tr>' +
                    '<td class="text-right" colspan="5">Total Taka : </td>' +
                    '<td colspan="2" class="text-right">' + totalTaka.toFixed(2) + '</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Discount : </td>' +
                    '<td colspan="2" class="text-right"> Free Delivery</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Delivery Cost : </td>' +
                    '<td colspan="2" class="text-right">' + deliveryCost.toFixed(2) + '</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Total Taka : </td>' +
                    '<td colspan="2" class="text-right">' + (totalTaka + deliveryCost).toFixed(2) +
                    '</td><td></td>' +
                    '</tr>';

                let total_taka = (totalTaka + deliveryCost);

                tblEnd += '<tr>' +
                    '<td class="text-center" colspan="7">In Word : ' + convertAmount(total_taka) +
                    '</td><td></td>' +
                    '</tr>';

                $("#orderTable tbody").append(tblEnd);

                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                });
            }
        }


        $("#btn_add_product").on('click', function () {
            if (isLogedIn == 1) {
                manageItems();
            } else {
                $("#userLoginModal").modal('show');
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn_next_step').click(function () {
            $('#orderForm').trigger("reset");
            $('#modalHeading').html("Delivery To");
            $('#posModal').modal('show');
            //$('#posModal').appendTo("body");
        });


        $(".deliveryAddress").on('click', function (e) {
            $("#deliveryAddress").val($(this).data('address'));
        });


        let userInformation;
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            userInformation = JSON.stringify($('#orderForm').serializeArray());
            if (isDuplicateOrder && confirm("Order already placed !, Reorder again ?")) {
                placeOrder();
            } else {
                placeOrder();
            }
            //$(this).html('Sending..');
        });

        function placeOrder() {
            let finalItems = orderItems;

            $.each(finalItems, function (key, value) {
                delete value.cat_id;
                delete value.category;
                delete value.product;
                delete value.batch;
                delete value.exp;
            });

            // let url = "<?php echo e(route('products.categorywise')); ?>";
            let processUrl = "";

            <?php if(auth()->guard()->check()): ?>
            processUrl = '<?php echo e(route("pos.store")); ?>';
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            processUrl = '<?php echo e(route("pos.customer.order")); ?>';
            <?php endif; ?>

            let prescriptionData = new FormData();
            let imagefile = document.querySelector('#prescription');

            prescriptionData.append('orderCode', orderCode);
            prescriptionData.append('userData', userInformation);
            prescriptionData.append('orderItems', JSON.stringify(finalItems));
            prescriptionData.append("prescription", imagefile.files[0]);

            axios.post(processUrl, prescriptionData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).catch(function (error) {
                if (error.response.status === 422) {
                    alert(error.response.data.message + "\n" + error.response.data.errors.prescription);
                    //console.log("First Error" + JSON.stringify(error.response));
                }
            }).then((result) => {
                //console.log(result);
                if (result.status === 200) {
                    alert("Order Placed Successfully !");
                    location.reload();
                }
            })

        }

        $('body').on('click', '.edit-item', function () {
            let item_id = parseInt($(this).data("id"));
            let selectedItem = orderItems[item_id];
            selectedItemIndex = item_id;

            $('#category').val(selectedItem.cat_id).trigger("change");
            $('#product').val(selectedItem.id).trigger("change");
            $("#quantity").val(selectedItem.qty);

        });

        $('body').on('click', '.delete-item', function () {
            let item_id = parseInt($(this).data("id"));
            if (confirm("Are You sure want to delete !")) {
                orderItems.splice(item_id, 1);
                drawTable();
            }
        });

    });

</script>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/dashboard/pos/components/create_js.blade.php ENDPATH**/ ?>