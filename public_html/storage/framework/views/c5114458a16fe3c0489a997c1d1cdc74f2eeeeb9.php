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
                            <img src="<?php echo e(asset('public/frontend/assets/images/logo/logos.png')); ?>" style="width:60%; max-width:200px; height: 15vh;">
                        </td>

                        <td>
                            Order Date: <?php echo e($invoice_data->date); ?><br>
                            Order Code #: <?php echo e($invoice_data->order_code); ?>

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
                            <?php echo e($invoice_data->name); ?><br>
                            <?php echo e($shipping_data->ship_address); ?> <?php echo e($shipping_data->ship_country); ?><br>
                            <b>Shipped To:</b><br>
                            <?php echo e($shipping_data->ship_name); ?><br>
                            <?php echo e($shipping_data->ship_phone); ?><br>
                            <?php echo e($shipping_data->ship_email); ?><br>
                            <?php echo e($shipping_data->ship_address); ?> <?php echo e($shipping_data->ship_country); ?><br>
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
                <?php echo e($invoice_data->payment_type); ?>

            </td>

            <td>
                <?php echo e($invoice_data->payment_id); ?>

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
        <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="item">
            <td>
                <?php echo e($row->product_name); ?>*(<?php echo e($row->quantity); ?>)
            </td>
            <td>
                $<?php echo e($row->single_price); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <tr class="total">
            <td></td>
            <td>
                Subtotal:$<?php echo e($invoice_data->subtotal); ?><br>
                Shipping:$<?php echo e($invoice_data->shipping); ?><br>
                Vat:$<?php echo e($invoice_data->vat); ?><br>
                <hr>
                Total:$<?php echo e($invoice_data->total); ?>.00
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pdf_download.blade.php ENDPATH**/ ?>