<?php $__env->startSection('title', 'Checkout-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

<?php
$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
?>

<!-- Shopping Cart Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title2 mb-5">
            <div class="page-title">
                <ul class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo e(route(('show.cart'))); ?>">Cart</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route(('user.checkout'))); ?>">Apply Coupon</a></li>
                    <li class="breadcrumb-item">Payment Information</li>
                </ul>
            </div>
        </div>
        <div class="section-title2 text-center mb-4">
            <hr>
            <h2 class="title">Your order</h2>
            <hr>
        </div>
        <table class="cart-wishlist-table table">
            <thead>
            <tr>
                <th class="name" colspan="2">Product</th>
                <th class="color">Color</th>
                <th class="color">Size</th>
                <th class="price">Price</th>
                <th class="quantity">Quantity</th>
                <th class="subtotal">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="thumbnail"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->name)); ?>"><img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->options->image, true)[0])); ?>"></a></td>
                    <td class="name"> <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->name)); ?>"><?php echo e($row->name); ?></a></td>
                    <?php if($row->options->color == NULL): ?>
                        <td class="color">N/A</td>
                    <?php else: ?>
                        <td class="color"><?php echo e($row->options->color); ?></td>
                    <?php endif; ?>
                    <?php if($row->options->size == NULL): ?>
                        <td class="color">N/A</td>
                    <?php else: ?>
                        <td class="color"><?php echo e($row->options->size); ?></td>
                    <?php endif; ?>
                    <td class="price"><span>$<?php echo e($row->price); ?></span></td>
                    <td class="quantity"><span><?php echo e($row->qty); ?></span></td>
                    <td class="subtotal"><span>$<?php echo e($row->price*$row->qty); ?></span></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php if(Session::has('coupon')): ?>
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <p class="info-text">You have already applied coupon! Please proceed to next step.</p>
                </div>
            </div>
            <div class="cart-totals">
                <h2 class="title">Cart Totals</h2>
                <table>
                    <tbody>
                    <tr class="subtotal">
                        <th>SubTotal:</th>
                        <td><strong><span class="amount">$<?php echo e(Cart::Subtotal()); ?></p></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Coupon :<br> <p style="font-size: 15px; color: forestgreen;">[<?php echo e(Session::get('coupon')['name']); ?>]</p>
                        <a href="<?php echo e(route('coupon.remove')); ?>" class="btn btn-sm btn-primary">Remove</a>
                        </th>
                        <td><strong><span class="amount">$<?php echo e(Session::get('coupon')['discount']); ?></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Shipping Charge:</th>
                        <td><strong><span class="amount">$<?php echo e($charge); ?></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>VAT:</th>
                        <td><strong><span class="amount"><?php echo e($vat); ?>%</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Total: </th>
                        <?php
                        $vat_amount = Cart::Subtotal()*$vat/100;
                        $f_price = Cart::Subtotal() - Session::get('coupon')['discount'] + $charge + $vat_amount;
                        ?>
                        <td><strong><span>$<?php echo e(Cart::Subtotal()); ?> <p style="color: forestgreen;">+ <?php echo e($vat_amount); ?>(VAT Amount)</p><p style="color: darkred; margin-top: -10px;">- $<?php echo e(Session::get('coupon')['discount']); ?>(Coupon)</p>
                                    <hr>
                                    <p style="font-size: 25px;">$<?php echo e($f_price); ?></p></span></strong></td>
                    </tr>
                    </tbody>
                </table>
                <a href="<?php echo e(route(('user.payment'))); ?>" class="btn btn-dark btn-outline-hover-dark">Proceed To Final Step</a>
            </div>
        <?php else: ?>
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <div class="cart-coupon">
                        <form method="POST" action="<?php echo e(route('apply.coupon')); ?>"><?php echo csrf_field(); ?>
                            <input type="text" name="coupon" placeholder="Enter your coupon code" required>
                            <button class="btn" type="submit">Apply <i class="fal fa-gift"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cart-totals">
                <h2 class="title">Cart Totals</h2>
                <table>
                    <tbody>
                    <tr class="subtotal">
                        <th>SubTotal:</th>
                        <td><strong><span class="amount">$<?php echo e(Cart::Subtotal()); ?></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Coupon</th>
                        <td><strong><span class="amount">N/A</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Shipping Charge:</th>
                        <td><strong><span class="amount">$<?php echo e($charge); ?></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>VAT:</th>
                        <td><strong><span class="amount"><?php echo e($vat); ?>%</span></strong></td>
                    </tr>
                    <tr class="total">
                        <th>Total: </th>
                        <?php
                        $vat_amount = Cart::Subtotal()*$vat/100;
                        $f_price = Cart::Subtotal() + $charge + $vat_amount;
                        ?>
                        <td><strong><span>$<?php echo e(Cart::Subtotal()); ?> <p style="color: forestgreen; font-size: 15px;">+ <?php echo e($vat_amount); ?>(VAT Amount)</p>
                                    <hr>
                                    <p style="font-size: 25px;">$<?php echo e($f_price); ?></p></span></strong></td>
                    </tr>
                    </tbody>
                </table>
                <a href="<?php echo e(route(('user.payment'))); ?>" class="btn btn-dark btn-outline-hover-dark">Proceed To Final Step</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Shopping Cart Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/checkout.blade.php ENDPATH**/ ?>