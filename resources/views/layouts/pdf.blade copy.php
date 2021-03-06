<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice No {{($orderInfo[0]->order_code)}}</title>

    <style>
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
            color: #F00;
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
                                 style="width:120px; max-width:300px; height: 100px;">
                        </td>

                        <td style="text-align: right">
                            Invoice #: <strong>{{($orderInfo[0]->order_code)}}</strong> <br>
                            Created at : {{($orderInfo[0]->created_at)}}<br>
                            Accepted at : {{($orderInfo[0]->shipped_at)}}<br>
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
                                <strong>{{config('app_name')}}</strong><br>
                                12345 Sunny Road<br>
                                Rangpur,<br>
                                +880 1716 00 00 00
                            </address>
                        </td>

                        <td style="text-align: right">
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

    <table id="products_part" class="table table-sm table-bordered">
        <thead style="color: #1d68a7;">
        <tr>
            <th>Serial</th>
            <th>Category</th>
            <th>Product Name</th>
            {{-- <th>Batch No</th>
    <th>Expired</th> --}}
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
                <td>{{$serial++}}</td>
                <td>{{$item->products[0]->products_category->category_name}}</td>
                <td>
                    {{$item->products[0]->product_name}}
                </td>
                {{-- <td style="text-align: right">{{$item->batch}}</td>
                <td style="text-align: right">{{$item->expired}}</td> --}}
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
            <td colspan="5" style="text-align: right">Total : </td>

            <td style="text-align: right">
                <strong>{{number_format($total,2,'.','')}}</strong>
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Discount : </td>

            <td style="text-align: right">
                Free Delivery
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Delivery Cost : </td>

            <td style="text-align: right">
                0.00
            </td>
        </tr>

        <tr class="total">
            <td colspan="5" style="text-align: right">Total : </td>

            <td style="text-align: right">
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
                    echo ucwords($wordArray[0]." Taka and ");
                }

                @endphp
                Only
            </td>
        </tr>

        </tbody>
    </table>


</div>
</body>

</html>
