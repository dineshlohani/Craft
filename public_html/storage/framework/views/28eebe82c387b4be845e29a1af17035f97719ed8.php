<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Seo</a>
            <span class="breadcrumb-item active">Manage SEO</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Seo Setting</h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <form method="POST" action="<?php echo e(route('update.seo')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Meta Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="meta_title" value="<?php echo e($seo->meta_title); ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Meta Author: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="meta_author" value="<?php echo e($seo->meta_author); ?>"  required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Meta Tag: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="meta_tag" value="<?php echo e($seo->meta_tag); ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Meta Description: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="meta_description" required><?php echo e($seo->meta_description); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Google Analytics: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="google_analytics" required><?php echo e($seo->google_analytics); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Bing Analytics: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="bing_analytics" required><?php echo e($seo->bing_analytics); ?></textarea>
                                    <input type="hidden" name="id" value="<?php echo e($seo->id); ?>">
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Seo Setting</button>
                            <a href="<?php echo e(route('admin.home')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


    <?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/seo/view_seo.blade.php ENDPATH**/ ?>