<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">SubCategory</a>
            <span class="breadcrumb-item active">Edit Sub-Category</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Sub-Category Update</h6>
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
                    <form method="post" action="<?php echo e(url('update/subcategory/'.$subcat->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category Name: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($subcat->subcategory_name); ?>" name="subcategory_name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="category_id">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"
                                        <?php if ($row->id == $subcat->category_id) {
                                            echo "selected";
                                        } ?> ><?php echo e($row->category_name); ?>  </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20" style="cursor: pointer;">Update</button>
                            <a href="<?php echo e(route('categories')); ?>" class="btn btn-danger mg-r-5">Cancel</a>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/category/edit_subcat.blade.php ENDPATH**/ ?>