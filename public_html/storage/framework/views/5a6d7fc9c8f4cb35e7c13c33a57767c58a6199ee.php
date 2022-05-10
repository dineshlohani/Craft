<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Users</a>
            <span class="breadcrumb-item active">View Users</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Admins List
                    <a href="<?php echo e(route('admin.create.user')); ?>" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of admins with access privileges.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-5p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Phone</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-15p">Access</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->phone); ?></td>
                                <td><?php echo e($row->email); ?></td>
                                <td>
                                    <?php if($row->category == 1): ?>
                                        <span class="badge btn-danger">Category</span>
                                    <?php endif; ?>
                                    <?php if($row->product == 1): ?>
                                        <span class="badge btn-info">Product</span>
                                    <?php endif; ?>
                                    <?php if($row->orders == 1): ?>
                                        <span class="badge btn-warning">Orders</span>
                                    <?php endif; ?>
                                    <?php if($row->report == 1): ?>
                                        <span class="badge btn-primary">Order Report </span>
                                    <?php endif; ?>
                                    <?php if($row->users == 1): ?>
                                        <span class="badge btn-success">Users & Role </span>
                                    <?php endif; ?>
                                    <?php if($row->return_order == 1): ?>
                                        <span class="badge btn-danger">Order Return </span>
                                    <?php endif; ?>
                                    <?php if($row->product_review == 1): ?>
                                        <span class="badge btn-info">Product Review </span>
                                    <?php endif; ?>
                                    <?php if($row->coupon == 1): ?>
                                        <span class="badge btn-warning">Coupon </span>
                                    <?php endif; ?>
                                    <?php if($row->newsletter == 1): ?>
                                        <span class="badge btn-primary">Newsletter </span>
                                    <?php else: ?>
                                    <?php endif; ?>
                                    <?php if($row->seo_setting == 1): ?>
                                        <span class="badge btn-success">Seo Setting </span>
                                    <?php endif; ?>
                                    <?php if($row->type == 1): ?>
                                        <span class="badge btn-danger">Type </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(URL::to('admin/user/edit/'.$row->id)); ?>" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="<?php echo e(URL::to('admin/user/delete/'.$row->id)); ?>" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

    <?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/user_role/viewuser_role.blade.php ENDPATH**/ ?>