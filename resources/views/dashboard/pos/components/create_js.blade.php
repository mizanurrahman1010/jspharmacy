@php
    $order_code = strtoupper("JSP" .date("y"). str_pad((date('z') + 1), 3, "0", STR_PAD_LEFT) . "" . substr(uniqid(), 3,
    -4));
@endphp


<script type="text/javascript">
    $(function () {
        let productSelect2 = $("#product");
        productSelect2.select2();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let unitList = [];
        //alert(unitList.length);

        let isLogedIn = "{{(Auth::user()) ? 1 : 0}}";

        let orderItems = [];
        let selectedItemIndex = 0;
        let isDuplicateOrder = false;
        let orderCode = '{{$order_code}}';

        function getUnitName(id) {
            let unitName = "";
            //console.log(unitList);
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
            // $("#product").empty();

            let url = "{{ route('products.categorywise')}}";

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
                //console.log(error);
            }).then(function () {
                if (orderItems.length > 0) {
                    $("#product").val(orderItems[selectedItemIndex].id).trigger('change');
                }
            });
        }

        // loadProduct();


        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });

        $("#category").on("change", function (e) {
            // loadProduct();
                selectProduct();
        });

        productSelect2.on('select2:select', function (e) {
            newSelectedProduct = e.params.data;
        });


        function selectProduct(search = '', category = '') {

            let cat = $("#category").val();

            // if ((search != '') && (category != '')) {
            //     productSelect2.empty().trigger("change");
            //     productSelect2.select2();
            // }

            productSelect2.empty().trigger("change");

            productSelect2.select2({
                placeholder: 'Select Product',
                //allowClear: true,
                theme: 'bootstrap4',
                cache: false,
                ajax: {
                    url: "{{route('products.search')}}",
                    dataType: 'json',
                    type: "POST",
                    delay: 250,
                    data: function (params) {
                        const query = {
                            search: params.term,
                            category: cat ,
                        };
                        return query;
                    },
                    processResults: function (data, params) {
                        unitList = data.units;
                        return {
                            results: data.products,
                        }
                    },
                    minimumInputLength: 1,
                    success: function (data) {
                      //  console.log("Ajax Success ", data);
                    }
                }
            });
        }

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
                    $("#btn_next_step").attr('disabled', true);
                    orderWithPrescription = false;
                    this.value = '';
            }
        });

        $("#btn_next_step").attr('disabled', true);

        let newSelectedProduct = null;
        let rawProductsList = [];

        function manageItems() {
            let item = new Object();
            let category = $('#category').select2('data')[0].text;
            let cat_id = $('#category').val();

            let id = $('#product').val();
            let product = $('#product').select2('data')[0].text;;
            let rate = (newSelectedProduct != null) ? newSelectedProduct.rate : $("#product").select2().find(":selected").data("rate");
            let unit = (newSelectedProduct != null) ? newSelectedProduct.unit : $("#product").select2().find(":selected").data("unit");

            let qty = $("#quantity").val();

            item = {
                cat_id: cat_id,
                category: category,
                id: id,
                product: product,
                rate: rate,
                unit: unit,
                qty: qty,
                mrp: (rate * qty)
            }

            let isExists = false;

            $.each(orderItems, function (key, value) {
                //console.log("Compare #",key," - ", value.id,' - ' ,item.id,' - ',qty,' - ',item.qty);
                if (value.id == item.id) {
                    isExists = true;
                    orderItems[key] = item;
                }
            });

            if (!isExists && item.id != "") {
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
                    '<td>' + value.category + '</td>' +
                    '<td>' + value.product + '</td>' +
                    '<td class="text-right">' + value.rate.toFixed(2) + ' / ' + getUnitName(value.unit) + '</td>' +
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
                    '<td  class="text-right">' + totalTaka.toFixed(2) + '</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Discount : </td>' +
                    '<td  class="text-right"> Free Delivery</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Delivery Cost : </td>' +
                    '<td  class="text-right">' + deliveryCost.toFixed(2) + '</td><td></td>' +
                    '</tr>';

                tblEnd += '<tr>' +
                    '<td class="text-right" colspan="5">Total Taka : </td>' +
                    '<td  class="text-right">' + Math.round(totalTaka + deliveryCost).toFixed(2) +
                    '</td><td></td>' +
                    '</tr>';

                let total_taka = Math.round(totalTaka + deliveryCost);



                tblEnd += '<tr>' +
                    '<td class="text-center" colspan="7">In Word : ' + convertAmount(total_taka) +
                    '</td><td></td>' +
                    '</tr>';

                $("#orderTable tbody").append(tblEnd);

            }
        }


        $("#btn_add_product").on('click', function () {
            if (isLogedIn == 1) {
                manageItems();
                selectProduct();
                //newSelectedProduct = null;
            } else {
                $("#userLoginModal").modal('show');
            }
        });


        $('#btn_next_step').click(function () {
            var cusGeoAddress = "";
            $('#orderForm').trigger("reset");
            $('#modalHeading').html("Delivery To");
            $('#posModal').modal('show');
            //$('#posModal').appendTo("body");
        });

        function validateDeliveryAddress() {
            if (($.trim($("#delivery_address").val()) == "") || ($.trim($("#delivery_address").val()).length < 5)) {
                $('#saveBtn').attr('disabled', true);
            } else {
                $('#saveBtn').attr('disabled', false);
            }
        }

        $('#posModal').on('shown.bs.modal', function (e) {
            validateDeliveryAddress()
        })

        $("#delivery_address").on('input propertychange', function () {
            validateDeliveryAddress();
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

            // let url = "{{ route('products.categorywise')}}";
            let processUrl = "";

            @auth
                processUrl = '{{route("pos.store")}}';
            @endauth

                @guest
                processUrl = '{{route("pos.customer.order")}}';
                @endguest

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

        let selectedItem = null;
        $('body').on('click', '.edit-item', function () {

            let item_id = parseInt($(this).data("id"));
            selectedItem = orderItems[item_id];

            if (productSelect2.data('select2')) {
                productSelect2.select2("destroy");

                $.ajax({
                    type: "POST",
                    url: "{{route('products.search')}}",
                    cache: false,
                    dataType: 'json',
                    data: {
                        search: selectedItem.product,
                        category: selectedItem.cat_id,
                    }
                }).done(function (response) {
                    //console.log(response);
                    unitList = response.units;

                    $.each(response.products, function (key, value) {
                        //console.log("Responce # ",value.text," # Itm = " ,value.id," # Sel = ",selectedItem.id);
                        //let newOption = new Option(value.text, value.id, false, ((selectedItem.id==value.id)?true:false));
                        let newOption = new Option(value.text, value.id, false, false);
                        newOption.setAttribute('data-rate', value.rate);
                        newOption.setAttribute('data-unit', value.unit);
                        productSelect2.append(newOption).trigger("change");
                    });

                }).fail(function () {
                    alert("error");
                });
            }

            selectedItemIndex = item_id;
            $('#category').val(selectedItem.cat_id).trigger("change");
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
