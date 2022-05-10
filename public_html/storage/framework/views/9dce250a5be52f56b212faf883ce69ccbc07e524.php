<?php $__env->startSection('admin_content'); ?>


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Products</a>
            <span class="breadcrumb-item active">Product List</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product List
                    <a href="<?php echo e(route('add.product')); ?>" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                        <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Sub-Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->product_code); ?></td>
                                <td class=""><?php echo e($row->product_name); ?></td>
                                <td style=""> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" height="80px;" width="80px;"> </td>
                                <td style=""><?php echo e($row->category_name); ?></td>
                                <?php if($row->subcategory_name == NULL): ?>
                                    <td style="">N/A</td>
                                <?php else: ?>
                                    <td style=""><?php echo e($row->subcategory_name); ?></td>
                                <?php endif; ?>
                                <td style="">
                                    <?php if($row->status == 1): ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Inactive</span>
                                    <?php endif; ?>

                                </td>
                                <td>
                                    <a href="<?php echo e(URL::to('view/product/'.$row->id)); ?>" class="btn btn-sm btn-warning" title="View Full-Details"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo e(URL::to('edit/product/'.$row->id)); ?> " class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo e(URL::to('delete/product/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                                    <?php if($row->status == 1): ?>
                                        <a href="<?php echo e(URL::to('inactive/product/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Make Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(URL::to('active/product/'.$row->id)); ?>" class="btn btn-sm btn-info" title="Make Active"><i class="fa fa-thumbs-up"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/product/index.blade.php ENDPATH**/ ?>