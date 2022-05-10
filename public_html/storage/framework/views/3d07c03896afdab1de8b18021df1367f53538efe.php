<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Banner</a>
            <span class="breadcrumb-item active">View Banner</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Banner List
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addbannermodal" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of your Banners for homepage.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Title</th>
                            <th class="wd-15p">Sub Title</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key +1); ?></td>
                                <td><?php echo e($row->title); ?></td>
                                <td><?php echo e($row->sub_title); ?></td>
                                <td> <img src="<?php echo e(URL::to($row->image)); ?>" height="70px;" width="80px;"> </td>
                                <td>
                                    <a href="<?php echo e(URL::to('edit/banner/'.$row->id)); ?>" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="<?php echo e(URL::to('delete/banner/'.$row->id)); ?>" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        <!-- Add Category MODAL -->
        <div id="addbannermodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Banner</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('store.banner')); ?>" method="POST" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        <div class="modal-body pd-20">
                            <div class="col-xl-12">
                                
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Title: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="title" class="form-control" placeholder="Enter Banner Sub Title" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Sub Title: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="sub_title" class="form-control" placeholder="Enter Banner Title" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Banner Image" name="image" onchange="readURL(this);">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <img class="" src="https://via.placeholder.com/150x100?text=Upload+New" alt="Image" id="one">
                                        </div>
                                    </div><!-- row -->
                                    <hr>
                                </div><!-- card -->
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        
        <script type="text/javascript">
            function readURL(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#one')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(100);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>
            <script type="text/javascript">
                <?php if(count($errors) > 0): ?>
                $('#addbannermodal').modal('show');
                <?php endif; ?>
            </script>
    <?php $__env->stopPush(); ?>



<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/banner/banner.blade.php ENDPATH**/ ?>