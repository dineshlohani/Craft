<?php $__env->startSection('admin_content'); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Products</a>
            <span class="breadcrumb-item active">Product Details</span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product Details
                    <a href="<?php echo e(route('all.product')); ?>" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Products</a>
                </h6>
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Name: </label>
                                <br>
                                <strong><?php echo e($product->product_name); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Code:</label>
                                <br>
                                <strong><?php echo e($product->product_code); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Quantity:</label>
                                <br>
                                <strong><?php echo e($product->product_quantity); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category:</label>
                                <br>
                                <strong><?php echo e($product->category_name); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Sub-Category:</label>
                                <br>
                                <?php if($product->subcategory_name == NULL): ?>
                                    <strong>N/A</strong>
                                <?php else: ?>
                                    <strong><?php echo e($product->subcategory_name); ?></strong>
                                <?php endif; ?>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Selling Price:</label>
                                <br>
                                <strong>$ <?php echo e($product->selling_price); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Discount Price:</label>
                                <br>
                                <strong>$ <?php echo e($product->discount_price); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Color:</label>
                                <br>
                                <strong><?php echo e($product->product_color); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Size:</label>
                                <br>
                                <strong><?php echo e($product->product_size); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Material: </label>
                                <br>
                                <strong><?php echo e($product->product_material); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Weight:</label>
                                <br>
                                <strong><?php echo e($product->product_weight); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Dimension:</label>
                                <br>
                                <strong><?php echo e($product->product_dimension); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Product Diameter:</label>
                                <br>
                                <strong><?php echo e($product->product_diameter); ?></strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Product Description:</label>
                                <br>
                                <p><?php echo $product->product_desc; ?></p>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                <br>
                                <a href="<?php echo e(URL::to($product->video_link)); ?>" target="_blank"><strong><?php echo e($product->video_link); ?></strong></a>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Audio Link: <span class="tx-danger">*</span></label>
                                <br>
                                <a href="<?php echo e(URL::to($product->audio_link)); ?>" target="_blank"><strong><?php echo e($product->audio_link); ?></strong></a>
                            </div>
                        </div><!-- col-12 -->
                        <?php $__currentLoopData = json_decode($product->filename, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Image <?php echo e($loop->iteration); ?>:</label>
                                    <label class="custom-file">
                                        <a href="<?php echo e(URL::to('public/media/product/'.$images)); ?>" target="_blank"><img src="<?php echo e(URL::to('public/media/product/'.$images)); ?>"  style="height: 100px; width: 200px; margin-top: 50px;"></a>
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!-- row -->
                    <br><hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="">
                                <i><span>Best Seller &nbsp</span></i>
                                <?php if($product->best_selling == 1): ?>
                                    <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Inactive</span>
                                <?php endif; ?>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="">
                                <i><span>New Arrival &nbsp</span></i>
                                <?php if($product->new_arrival == 1): ?>
                                    <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Inactive</span>
                                <?php endif; ?>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="">
                                <i><span>Deal of The Week &nbsp</span></i>
                                <?php if($product->deal_week == 1): ?>
                                    <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Inactive</span>
                                <?php endif; ?>
                            </label>
                        </div>
                    </div>
                </div><!-- form-layout -->
            </div><!-- card -->
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/product/show.blade.php ENDPATH**/ ?>