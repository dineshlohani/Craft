<?php $__env->startSection('title', 'My Order Tracking-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <style>
        .order-tracker {
            display: flex;
            margin: 0px auto;
            padding: 0;
            list-style: none;
            text-align: center;
        }
        .order-tracker li {
            flex: 1 1 0%;
            margin: 0;
            padding: 0;
            min-width: 24px;
        }
        .order-tracker li em {
            display: block;
            position: relative;
        }
        .order-tracker li span {
            font-weight: 600;
            font-size: 16px;
            font-family: "Open Sans", sans-serif;
            text-transform: uppercase;
        }
        .order-tracker li em:before {
            content: attr(data-text);
            display: block;
            position: relative;
            margin: 0 auto 10px auto;
            width: 60px;
            border-radius: 50%;
            color: #333;
            background: #fff;
            text-align: center;
            font-style: none;
            padding: 20px 0;
            font-family: "Open Sans", sans-serif;
            font-size: 20px;
            font-weight: 900;
            line-height: 20px;
            border: 4px solid #c6c6c6;
            box-shadow: 0 0 0 10px #fff;
            align-items: center;
            z-index: 20;
            transition: background-color, border-color;
            transition-duration: 0.3s;
        }

        .order-tracker li.complete em:before {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            font-weight: 900;
            -webkit-font-smoothing: antialiased;
            background: #119911;
            border-color: #119911;
            color: #fff;
        }

        .order-tracker li.reject em:before {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            font-weight: 900;
            -webkit-font-smoothing: antialiased;
            background: #db0f1a;
            border-color: #db0f1a;
            color: #fff;
        }

        .order-tracker li em:after {
            content: "";
            display: block;
            background-color: #c6c6c6;
            position: absolute;
            z-index: -10;
            right: 50%;
            top: 30px;
            width: 100%;
            height: 4px;
            transition: background-color 0.3s, background-position 0.3s;
        }
        .order-tracker li.complete em:after {
            background: #119911;
        }
        .order-tracker li.reject em:after {
            background: #119911;
        }
        .order-tracker li.active em:after {
            background: #119911;
            background: linear-gradient(
                90deg,
                #119911 0%,
                #119911 50%,
                rgba(198, 198, 198, 1) 51%,
                rgba(198, 198, 198, 1) 100%
            );
        }
        .order-tracker li:first-child em:after {
            display: none;
        }

    </style>

    <!-- Order Track Section Start -->
    <div class="section section">
        <div class="text-center mb-4 mt-2">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-md btn-secondary"><i class="fas fa-backward"></i> Go Back</a>
            <a onClick="window.location.reload();" class="btn btn-md btn-secondary" style="color: white;"><i class="fas fa-sync"></i> Refresh</a>
        </div>
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Order Track Result</h2>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-1 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <?php if($track->status ==0): ?>
                        <ul class="order-tracker">
                            <li class="complete"><em data-text="&#10004"></em><span>Order Received</span></li>
                            <li class="active"><em data-text="&#10006"></em><span>Order Accepted</span></li>
                            <li class=""><em data-text="&#10006"></em><span>Order In Delivery</span></li>
                            <li><em data-text="&#10006"></em><span>Order Complete</span></li>
                        </ul>
                        <p class="text-center mt-3" style="font-size: 23px; font-style: italic;">Your orders are under review.</p>
                    <?php elseif($track->status ==1): ?>
                        <ul class="order-tracker">
                            <li class="complete"><em data-text="&#10004"></em><span>Order Received</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order Accepted</span></li>
                            <li class="active"><em data-text="&#10006"></em><span>Order In Delivery</span></li>
                            <li><em data-text="&#10006"></em><span>Order Complete</span></li>
                        </ul>
                        <p class="text-center mt-3" style="font-size: 23px; font-style: italic;">Your orders has been accepted and is in process.</p>
                    <?php elseif($track->status ==2): ?>
                        <ul class="order-tracker">
                            <li class="complete"><em data-text="&#10004"></em><span>Order Received</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order Accepted</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order In Delivery</span></li>
                            <li class="active"><em data-text="&#10006"></em><span>Order Complete</span></li>
                        </ul>
                        <p class="text-center mt-3" style="font-size: 23px; font-style: italic;">Your orders are being delivered.</p>
                    <?php elseif($track->status ==3): ?>
                        <ul class="order-tracker">
                            <li class="complete"><em data-text="&#10004"></em><span>Order Received</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order Accepted</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order In Delivery</span></li>
                            <li class="complete"><em data-text="&#10004"></em><span>Order Complete</span></li>
                        </ul>
                        <p class="text-center mt-3" style="font-size: 23px; font-style: italic;">Your order has been successfully delivered. Order Complete!</p>
                    <?php else: ?>
                        <ul class="order-tracker">
                            <li class="complete"><em data-text="&#10004"></em><span>Order Received</span></li>
                            <li class="reject"><em data-text="&#10006"></em><span>Order Rejected</span></li>
                            <li class=""><em data-text="&#10006"></em><span>Order In Delivery</span></li>
                            <li><em data-text="&#10006"></em><span>Order Complete</span></li>
                        </ul>
                        <p class="text-center mt-3" style="font-size: 23px; font-style: italic;">Sorry! Your order has been rejected. Please contact us for further information.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Track Section End -->

    <!-- Order Details Section Start -->
    <div class="section section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Order Details</h2>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-1 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"> <b>Date:</b> <?php echo e($track->date); ?></li>
                        <li class="list-group-item"> <b>Month:</b> <?php echo e($track->month); ?></li>
                        <li class="list-group-item"> <b>Year:</b> <?php echo e($track->year); ?></li>
                        <li class="list-group-item"> <b>Payment Type:</b> <?php echo e($track->payment_type); ?> </li>
                        <li class="list-group-item"> <b>Transaction ID:</b> <?php echo e($track->payment_id); ?></li>
                        <li class="list-group-item"> <b>Balance ID:</b> <?php echo e($track->blnc_trans); ?></li>
                        <li class="list-group-item"> <b>Subtotal:</b>  $<?php echo e($track->subtotal); ?></li>
                        <li class="list-group-item"> <b>Shipping:</b>  $<?php echo e($track->shipping); ?></li>
                        <li class="list-group-item"> <b>Vat:</b>  $<?php echo e($track->vat); ?></li>
                        <li class="list-group-item"> <b>Total:</b>  $<?php echo e($track->total); ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Details One Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/tracking/order_track.blade.php ENDPATH**/ ?>