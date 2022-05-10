<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Invoice</title>

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

        .invoice-box table tr td:nth-child(2) {
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

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

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

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('public/frontend/assets/images/logo/logos.png')}}" style="width:60%; max-width:200px; height: 15vh;">
                        </td>

                        <td>
                            Order Date: {{ $invoice_data->date }}<br>
                            Order Code #: {{$invoice_data->order_code}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <b>Invoiced To:</b><br>
                            {{ $invoice_data->name }}<br>
                            {{ $shipping_data->ship_address }} {{ $shipping_data->ship_country }}<br>
                            <b>Shipped To:</b><br>
                            {{ $shipping_data->ship_name }}<br>
                            {{ $shipping_data->ship_phone }}<br>
                            {{ $shipping_data->ship_email }}<br>
                            {{ $shipping_data->ship_address }} {{ $shipping_data->ship_country }}<br>
                        </td>
                        <td>
                            <b>Pay To:</b><br>
                            Crafts Man Nepal<br>
                            Thamel,Kathmandu<br>
                            Nepal
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
                Payment ID
            </td>
        </tr>

        <tr class="details">
            <td>
                {{$invoice_data->payment_type}}
            </td>

            <td>
                {{$invoice_data->payment_id}}
            </td>
        </tr>
        <tr class="heading">
            <td>
                Item
            </td>
            <td>
                Unit Price
            </td>
        </tr>
        @foreach($order_details as $row)
        <tr class="item">
            <td>
                {{ $row->product_name }}*({{ $row->quantity }})
            </td>
            <td>
                ${{ $row->single_price }}
            </td>
        </tr>
        @endforeach

        <tr class="total">
            <td></td>
            <td>
                Subtotal:${{ $invoice_data->subtotal }}<br>
                Shipping:${{ $invoice_data->shipping }}<br>
                Vat:${{ $invoice_data->vat }}<br>
                <hr>
                Total:${{ $invoice_data->total }}.00
            </td>
        </tr>
    </table>
</div>
</body>
</html>
