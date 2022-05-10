<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Orders</a>
            <span class="breadcrumb-item active">
                <?php if(Request::is('admin/return/request')): ?>
                    Order Return Request
                <?php elseif(Request::is('admin/return/complete')): ?>
                    Order Return Completed
                <?php endif; ?>
            </span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h4 class="card-body-title">
                    <?php if(Request::is('admin/return/request')): ?>
                        Order Return Request
                    <?php elseif(Request::is('admin/return/complete')): ?>
                        Order Return Completed
                    <?php endif; ?>
                    <a href="" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Orders</a>
                </h4>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Date(D-M-Y)</th>
                            <th class="wd-15p">Payment Type</th>
                            <th class="wd-15p">Transaction ID</th>
                            <th class="wd-15p">Shipping</th>
                            <th class="wd-15p">Vat</th>
                            <th class="wd-15p">SubTotal</th>
                            <th class="wd-15p">Total</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key +1); ?></td>
                                <td><?php echo e($row->date); ?></td>
                                <td><?php echo e($row->payment_type); ?></td>
                                <td><?php echo e($row->blnc_trans); ?></td>
                                <td>$<?php echo e($row->shipping); ?></td>
                                <td>$<?php echo e($row->vat); ?></td>
                                <td>$<?php echo e($row->subtotal); ?></td>
                                <td>$<?php echo e($row->total); ?>.00</td>
                                <td>
                                    <?php if($row->return_order == 1): ?>
                                        <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 3px;">Pending</span>
                                    <?php elseif($row->return_order == 2): ?>
                                        <span class="badge badge bg-success" style="font-size: 13px; color: white; padding: 3px;">Success</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($row->return_order == 1): ?>
                                        <a href="<?php echo e(URL::to('admin/return/approve/'.$row->id)); ?>" class="btn btn-sm btn-success mg-b-10"><i class="fa fa-check-circle mg-r-10"></i>Approve</a>
                                        <a href="<?php echo e(URL::to('admin/order/view/'.$row->id)); ?>" class="btn btn-sm btn-primary mg-b-10 pr-4"><i class="fa fa-eye mg-r-10"></i>View</a>
                                    <?php elseif($row->return_order == 2): ?>
                                        <a href="<?php echo e(URL::to('admin/order/view/'.$row->id)); ?>" class="btn btn-sm btn-primary mg-b-10 pr-4"><i class="fa fa-eye mg-r-10"></i>View</a>
                                    <?php endif; ?>
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




<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/returnOrder/return_order.blade.php ENDPATH**/ ?>