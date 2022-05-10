<?php $__env->startSection('title', 'My Order Details-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Order Details Section Start -->
    <div class="section section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="text-center mb-5 mt-2">
                <a href="<?php echo e(route('home')); ?>" class="btn btn-md btn-secondary"><i class="fas fa-backward"></i> Go Back</a>
                <a onClick="window.location.reload();" class="btn btn-md btn-secondary" style="color: white;"><i class="fas fa-sync"></i> Refresh</a>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-2 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <h2 class="title">My Order Details</h2>
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"> <b>Name:</b> <?php echo e($order->name); ?></li>
                        <li class="list-group-item"> <b>Phone Number:</b> <?php echo e($order->phone); ?></li>
                        <li class="list-group-item"> <b>Email:</b> <?php echo e($order->email); ?></li>
                        <li class="list-group-item"> <b>DATE (D-M-Y):</b> <?php echo e($order->date); ?></li>
                        <li class="list-group-item"> <b>Month:</b> <?php echo e($order->month); ?></li>
                        <li class="list-group-item"> <b>Year:</b>  <?php echo e($order->year); ?></li>
                        <li class="list-group-item"> <b>Sub Total:</b>  $<?php echo e($order->subtotal); ?></li>
                        <li class="list-group-item"> <b>Shipping:</b>  $<?php echo e($order->shipping); ?></li>
                        <li class="list-group-item"> <b>VAT:</b>  $<?php echo e($order->vat); ?></li>
                        <li class="list-group-item"> <b>Total:</b>  $<?php echo e($order->total); ?>.00</li>
                        <li class="list-group-item"> <b>Payment ID:</b>  <?php echo e($order->payment_id); ?></li>
                        <li class="list-group-item"> <b>Payment Type:</b>  <?php echo e($order->payment_type); ?></li>
                    </ul>
                </div>

                <div class="col learts-mb-90">
                    <h2 class="title">Order Shipping Details</h2>
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"> <b>Shipping Name:</b> <?php echo e($shipping->ship_name); ?></li>
                        <li class="list-group-item"> <b>SHIPPING PHONE NUMBER:</b> <?php echo e($shipping->ship_phone); ?></li>
                        <li class="list-group-item"> <b>Shipping Email:</b> <?php echo e($shipping->ship_email); ?></li>
                        <li class="list-group-item"> <b>Shipping Country:</b> <?php echo e($shipping->ship_country); ?></li>
                        <li class="list-group-item"> <b>Shipping Address:</b> <?php echo e($shipping->ship_address); ?></li>
                        <?php if($shipping->ship_apartment != NULL): ?>
                            <li class="list-group-item"> <b>APARTMENT, SUITE, UNIT:</b><?php echo e($shipping->ship_apartment); ?></li>
                        <?php else: ?>
                            <li class="list-group-item"> <b>APARTMENT, SUITE, UNIT:</b>N/A</li>
                        <?php endif; ?>
                        <li class="list-group-item"> <b>SHIPPING TOWN/CITY:</b> <?php echo e($shipping->ship_city); ?></li>
                        <li class="list-group-item"> <b>POSTCODE/ZIPCODE:</b> <?php echo e($shipping->zip_code); ?></li>
                        <li class="list-group-item"> <b>Status:</b>
                            <?php if($order->status == 0): ?>
                                <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Pending</span>
                            <?php elseif($order->status == 1): ?>
                                <span class="badge badge-info" style="font-size: 13px; color: white; padding: 10px;">Order Payment Accepted</span>
                            <?php elseif($order->status == 2): ?>
                                <span class="badge badge-primary" style="font-size: 13px; color: white; padding: 10px;">Delivery In Progress</span>
                            <?php elseif($order->status == 3): ?>
                                <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Order Delivered</span>
                            <?php else: ?>
                                <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 10px;">Order Cancelled</span>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Details Section End -->

    <!-- Order Products Details Section Start -->
    <div class="section section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Product Details</h2>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-1 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <table class="cart-wishlist-table table">
                        <thead>
                        <tr>
                            <th class="name" colspan="2">Product</th>
                            <th class="color">Color</th>
                            <th class="color">Size</th>
                            <th class="quantity">Quantity</th>
                            <th class="price">Unit Price</th>
                            <th class="subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="thumbnail"><a href=""><img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>"></a></td>
                                <td class="name"> <a href=""><?php echo e($row->product_name); ?></a></td>
                                <?php if($row->color == NULL): ?>
                                    <td class="color"> <a href="">N/A</a></td>
                                <?php else: ?>
                                    <td class="color"> <a href=""><?php echo e($row->color); ?></a></td>
                                <?php endif; ?>
                                <?php if($row->size == NULL): ?>
                                    <td class="color"> <a href="">N/A</a></td>
                                <?php else: ?>
                                    <td class="color"> <a href=""><?php echo e($row->size); ?></a></td>
                                <?php endif; ?>
                                <td class="color"><span><?php echo e($row->quantity); ?></span></td>
                                <td class="price"><span>$<?php echo e($row->single_price); ?>.00</span></td>
                                <td class="subtotal"><span>$ <?php echo e($row->total_price); ?>.00</span></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Products Details Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/order/view_order.blade.php ENDPATH**/ ?>