<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Site Setting</a>
            <span class="breadcrumb-item active">Manage About Us</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">About Us Setting</h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <form method="POST" action="<?php echo e(route('update.about')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">About Heading: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="about_title" value="<?php echo e($about->about_title); ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">About Description: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" name="about_desc" required><?php echo e($about->about_desc); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4 mb-5">
                                <div class="form-group">
                                    <label class="form-control-label">About Image: <span class="tx-danger">*</span></label>
                                    <label class="custom-file">
                                        <input type="file"  id="file" name="about_image" class="custom-file-input" onchange="readURL2(this);">
                                        <span class="custom-file-control"></span>
                                        <img src="<?php echo e(URL::to($about->about_image)); ?>" style="width: 150px; height: 100px; margin-top: 15px; margin-bottom: 10px;">
                                        <img src="https://via.placeholder.com/150x100" alt="Image" id="about">
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12 mt-5`">
                                <div class="form-group">
                                    <label class="form-control-label">Shipping Information: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="ship_info" required><?php echo e($about->ship_info); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Return Information: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="return_info" required><?php echo e($about->return_info); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Quality Information: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="quality_info" required><?php echo e($about->quality_info); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Wrapping Information: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="wrapping_info" required><?php echo e($about->wrapping_info); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Video Thumbnail Image: <span class="tx-danger">*</span></label>
                                    <label class="custom-file">
                                        <input type="file"  id="file" name="video_link_image" class="custom-file-input" onchange="readURL3(this);">
                                        <span class="custom-file-control"></span>
                                        <img class="mb-5 mt-3" src="<?php echo e(URL::to($about->video_link_image)); ?>" style="width: 150px; height: 100px;">
                                        <img class="mb-5 mt-3" src="https://via.placeholder.com/150x100" alt="Image" id="video">
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="video_link" value="<?php echo e($about->video_link); ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <input type="hidden" name="id" value="<?php echo e($about->id); ?>">
                        </div><!-- row -->
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update About Page</button>
                            <a href="<?php echo e(route('admin.home')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        
        <script type="text/javascript">
            function readURL2(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#about')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(100);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <script type="text/javascript">
            function readURL3(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#video')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(100);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/site-setting/about.blade.php ENDPATH**/ ?>