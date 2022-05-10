<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Policy</a>
            <span class="breadcrumb-item active">Edit Policy</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Policy Update</h6>
                <div class="table-wrapper">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?php echo e(url('update/policy/'.$policy->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($policy->title); ?>" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" id="summernote" name="desc" required><?php echo e($policy->desc); ?></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                                <a href="<?php echo e(route('admin.policies')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/policy/edit_policy.blade.php ENDPATH**/ ?>