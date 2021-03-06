<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice No <?php echo e(($orderInfo[0]->order_code)); ?></title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(5),
        .invoice-box table tr td:nth-child(7) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(5),
        .invoice-box table tr.total td:nth-child(7) {
            border-top: 2px solid #eee;
            font-weight: bold;
            text-align: center;
        }

        address,
        #products_part {
            text-decoration: none;
            font-style: normal;

        }


        @media  only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(5),
        .invoice-box table tr td:nth-child(7) {
            text-align: left;
        }

    </style>
</head>

<body>
    <div class="invoice-box">
        <table id="header_part" cellpadding="0" cellspacing="0">

            <tr class="top">
                <td colspan="7">
                    <table>
                        <tr>
                            <td class="title">

                                
                                

                                
                                

                                
                                

                                <img src="<?php echo e(asset(public_path('public/dist/img/AdminLTELogo.png'))); ?>"
                                    style="width:100%; max-width:300px;">




                            </td>

                            <td style="text-align: right">
                                Invoice #: <strong><?php echo e(($orderInfo[0]->order_code)); ?></strong> <br>
                                Created at : <?php echo e(($orderInfo[0]->created_at)); ?><br>
                                Accepted at : <?php echo e(($orderInfo[0]->accepted_at)); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="7">
                    <table>
                        <tr>
                            <td>
                                <address>
                                    <strong><?php echo e(config('app_name')); ?></strong><br>
                                    12345 Sunny Road<br>
                                    Rangpur,<br>
                                    +880 1716 00 00 00
                                </address>
                            </td>

                            <td style="text-align: right">
                                <address>
                                    Customer Name: <strong><?php echo e(($orderInfo[0]->delivery_to)); ?></strong><br>
                                    Address: <?php echo e(($orderInfo[0]->present_address)); ?><br>
                                    Phone : <?php echo e(($orderInfo[0]->mobile)); ?>

                                </address>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

        <table id="products_part" style="text-align: left">
            <thead style="color: #1d68a7;">
                <tr>
                    <th>Serial</th>
                    <th>Product Name</th>
                    
                    <th>Rate</th>
                    <th>Quantity</th>
                    <th>MRP</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $serial =1;
                $total =0;
                ?>

                <?php $__currentLoopData = $productsInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr class="text-center">
                    <td><?php echo e($serial++); ?></td>
                    <td>
                        <?php $__currentLoopData = $productsInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->product_id == $product->product_id): ?>
                        <?php echo e($product->products[0]->product_name); ?>

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    
                    <td style="text-align: right"><?php echo e(number_format($item->rate,2,'.','')); ?></td>
                    <td style="text-align: center"><?php echo e($item->quantity); ?></td>
                    <td style="text-align: right">
                        <?php
                        $total += $item->mrp;
                        ?>
                        <?php echo e(number_format($item->mrp,2,'.','')); ?>

                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <tr class="total">
                    <td colspan="4" style="text-align: right">Total</td>

                    <td style="text-align: right">
                        <strong><?php echo e(number_format($total,2,'.','')); ?></strong>
                    </td>
                </tr>


                
                
                
                
                
                

            </tbody>
        </table>


    </div>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/jspharmacy/resources/views/layouts/pdf.blade.php ENDPATH**/ ?>