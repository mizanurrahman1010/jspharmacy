<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invoice No {{($orderInfo[0]->order_code)}}</title>

    <style>
        body {
            position: relative;
            margin: 0px;
        }

        #watermark {
            position: absolute;
            bottom: 10%;
            left: 30%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 70px;
            -ms-transform: rotate(-25deg); /* IE 9 */
            transform: rotate(-25deg);
            padding: 10px;
            color: #A9A9FA;
            border: 2px solid #A9A9FA;
            opacity: 0.5;
        }


        .delivered {
            color: #FAE9E9 !important;
            border: 2px solid #FAE9E9 !important;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 5px;
            /*border: 1px solid #eee;*/
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 12px;
            line-height: 20px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 1px 0px;
            vertical-align: top;
        }

        #products_part td, #products_part th {
            border: 1px solid #e7e7e7;
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
        }

        .invoice-box table tr.information table td {
            padding-bottom: 10px;
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

        /*#products_part,#products_part tr td{*/
        /*    border: #00f169 solid 1px !important;*/
        /*}*/


        @media only screen and (max-width: 600px) {
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


    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
          href="{{asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
</head>

<body>

<div class="invoice-box">
    <table id="header_part" cellpadding="0" cellspacing="0">

        <tr class="top">
            <td colspan="7">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('public/dist/img/logo.jpg')}}"
                                 style="width:120px; max-width:300px; height: 95px;">
                        </td>

                        <td style="text-align: right">

                            <strong style="font-size: 20px; color: #005fcc">Invoice # : {{($orderInfo[0]->order_code)}}</strong>

                            <br>
                            Created at : {{($orderInfo[0]->created_at)}}<br>
                            Accepted at : {{($orderInfo[0]->shipped_at)}}<br>
                            Delivered at : {{($orderInfo[0]->delivery_at)}}<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="information">
            <td colspan="7">
                <table>
                    <tr>
                        <td style="width: 30%">
                            <address>
                                <strong> M/S JS Pharmacy</strong><br>
                                Dhap Jail Road<br>
                                Medical More Rangpur City<br>
                                Rangpur<br>
                                Drug License No-RP0770<br>
                            </address>
                        </td>

                        <td style="width: 40%; text-align: center; border-left: 1px solid #E7E7E7; border-right: 1px solid #E7E7E7;">
                            <address>
                                Pharmacist: <strong> Md. Minhaj Hossain</strong><br>
                                Mobile: +880 1717 675282 <br>
                                bKash No : 01919675282<br>
                                Email : jspharmacybd@gmail.com<br>
                                Website : www.jspharmacybd.com<br>
                            </address>
                        </td>

                        <td style="text-align: right; width: 30%">
                            <address>
                                Customer Name: <strong>{{($orderInfo[0]->customer->name)}}</strong><br>
                                Address: {{($orderInfo[0]->delivery_address)}}<br>
                                Phone : {{($orderInfo[0]->delivery_mobile)}}
                            </address>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

    <table id="products_part" style="margin-top:10px;">
        <thead style="color: #1d68a7;">
        <tr>
            <th style="text-align: left">Serial</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>MRP</th>
        </tr>
        </thead>

        <tbody>
        @php
            $serial =1;
            $total =0;
        @endphp

        @foreach($productsInfo as $item)

            <tr class="text-center">
                <td>{{$serial++}}
                    @if($item->prescriptionItem==1)
                        <span style="color: #FF0000; font-size: 20px; padding: 0px; margin: 0px;">*</span>
                    @endif
                </td>
                <td>{{$item->products[0]->products_category->category_name}}</td>
                <td>
                    {{$item->products[0]->product_name}}
                </td>
                <td style="text-align: right">{{number_format($item->rate,2,'.','')}}</td>
                <td style="text-align: center">{{$item->quantity}}</td>
                <td style="text-align: right">
                    @php
                        $total += $item->mrp;
                    @endphp
                    {{number_format($item->mrp,2,'.','')}}
                </td>
            </tr>

        @endforeach

        <tr class="total">
            <td colspan="5" style="text-align: right">Total :</td>

            <td style="text-align: right">
                <strong>{{number_format($total,2,'.','')}}</strong>
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Discount :</td>

            <td style="text-align: right">
                Free Delivery
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Delivery Cost :</td>

            <td style="text-align: right">
                0.00
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Total :</td>

            <td style="text-align: right">
                @php
                    $total = round($total, 0, PHP_ROUND_HALF_UP);
                @endphp
                <strong>{{number_format($total,2,'.','')}}</strong>
            </td>
        </tr>


        <tr>
            <td style="text-align: right">In Words :</td>
            <td colspan="5">
                @php
                    $inWord = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                    $tmpInWord =  $inWord->format($total);

                $wordArray = explode("point",$tmpInWord);
                if(sizeof($wordArray)>=2){
                    echo ucwords($wordArray[0]." Taka and ".$wordArray[1]." Paisa");
                }else{
                    echo ucwords($wordArray[0]." Taka ");
                }
                @endphp
                Only
            </td>
        </tr>

        </tbody>
    </table>


</div>

<h2 id="watermark"
    class="{{($orderInfo[0]->status=='delivered')?'delivered':'normal'}}">{{ucwords($orderInfo[0]->status)}}</h2>
</body>

</html>
