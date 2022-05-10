<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Category</a>
            <span class="breadcrumb-item active">Edit Category</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Category Update</h6>
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
                    <form method="post" action="<?php echo e(url('update/category/'.$category->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($category->category_name); ?>" name="category_name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Image: <span class="tx-danger">*</span></label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($category->category_image); ?>" name="category_image" onchange="readURL(this);">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo e(URL::to($category->category_image)); ?>" id="one" style="width: 150px; height: 100px;">
                                <input type="hidden" name="old_image" value="<?php echo e($category->category_image); ?>">
                            </div>
                            <div class="form-group">
                                <label class="ckbox">
                                    <input type="checkbox" name="show_index" value="1" <?php
                                        if ($category->show_index == 1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Show This Category In Homepage</span>
                                </label>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Update</button>
                            <a href="<?php echo e(route('categories')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

        
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

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/category/edit_category.blade.php ENDPATH**/ ?>