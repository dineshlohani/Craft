<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Users</a>
            <span class="breadcrumb-item active">Create Users</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add New Admin
                    <a href="<?php echo e(route('admin.all.user')); ?>" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Admins</a>
                </h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('admin.store.user')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name"  placeholder="Enter User Name" required="">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone"  placeholder="Enter Phone Number" required="">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"  placeholder="Enter Email Address" required="">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="password" name="password"  placeholder="Enter Password" required="">
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <hr><br>
                        <h6 class="card-body-title">Admin Previleges</h6>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="category" value="1">
                                    <span>Category</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="product" value="1">
                                    <span>Products</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="orders" value="1">
                                    <span>Orders</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="report" value="1">
                                    <span>Order Reports</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="users" value="1">
                                    <span>Users/Roles</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="return_order" value="1">
                                    <span>Return Orders</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="product_review" value="1">
                                    <span>Product Reviews</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="coupon" value="1">
                                    <span>Coupons</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="newsletter" value="1">
                                    <span>Newsletter</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="seo_setting" value="1">
                                    <span>Seo Settings</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="site_setting" value="1">
                                    <span>Site Settings</span>
                                </label>
                            </div> <!-- col-4 -->
                        </div><!-- end row -->
                        <hr><br>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Create Admin</button>
                            <a href="<?php echo e(route('admin.home')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/user_role/createuser_role.blade.php ENDPATH**/ ?>