<?php $__env->startSection('title', 'My Wishlist-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <div id="reloadWish">

        <?php if($wish_product->isEmpty()): ?>
            <div class="section section-padding text-center">
                <p>Your Wishlist is Empty !</p>
                <a class="btn btn-primary2 btn-hover-dark mr-3 mb-3" href="<?php echo e(url('all/products')); ?>">Continue Shopping</a>
            </div>

        <?php else: ?>
        <!-- Wishlist Section Start -->
            <div class="section section-padding">
                <div class="container">
                    <form class="cart-form" action="#">
                        <table class="cart-wishlist-table table">
                            <thead>
                            <tr>
                                <th class="name" colspan="2">Product</th>
                                <th class="price">Unit Price</th>
                                <th class="add-to-cart">&nbsp;</th>
                                <th class="remove">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $wish_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="thumbnail"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"><img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>"></a></td>
                                <td class="name"> <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"></a><?php echo e($row->product_name); ?></td>
                                <?php if($row->discount_price == NULL): ?>
                                <td class="price"><span>$ <?php echo e($row->selling_price); ?></span></td>
                                <?php else: ?>
                                <td class="price"><span>$ <?php echo e($row->discount_price); ?></span></td>
                                <?php endif; ?>
                                <td class="add-to-cart"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>" class="btn btn-light btn-hover-dark"><i class="fal fa-eye mr-2"></i>View Product</a></td>
                                <td class="remove"><a href="#" class="btn">×</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col text-center mb-n3">
                                <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="<?php echo e(url('all/products')); ?>">Continue Shopping</a>
                                <a class="btn btn-dark btn-outline-hover-dark mb-3" href="<?php echo e(route('show.cart')); ?>">View Cart</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Wishlist Section End -->
        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/wishlist.blade.php ENDPATH**/ ?>