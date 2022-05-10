<?php $__env->startSection('admin_content'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Coupon</a>
            <span class="breadcrumb-item active">View Coupon</span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Coupon List
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addcouponmodal" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Coupon Code</th>
                            <th class="wd-15p">Discount Amount($)</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key +1); ?></td>
                                <td><?php echo e($row->coupon); ?></td>
                                <td>$<?php echo e($row->discount); ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary mg-b-10" data-coupon="<?php echo e($row->coupon); ?>" data-discount="<?php echo e($row->discount); ?>" data-couponid="<?php echo e($row->id); ?>" data-toggle="modal" data-target="#editcouponmodal"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="<?php echo e(URL::to('delete/coupon/'.$row->id)); ?>" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
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
        <div id="addcouponmodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Coupon</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('store.coupon')); ?>" method="POST">
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
                                        <label class="col-sm-5 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="coupon" class="form-control" placeholder="Enter Coupon Code" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Discount($): <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="discount" class="form-control" placeholder="Enter Coupon Discount" required>
                                        </div>
                                    </div><!-- row -->
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

        <!-- Edit Category MODAL -->
        <div id="editcouponmodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Coupon</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('update.coupon','edit')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body pd-20">
                            <div class="col-xl-12">
                                <input type="hidden" name="coupon_id" id="coupon_id" value="">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" id="coupon" name="coupon" class="form-control" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Discount(%): <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" id="discount" name="discount" class="form-control" required>
                                        </div>
                                    </div><!-- row -->
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

        <?php $__env->stopSection(); ?>


        <?php $__env->startPush('scripts'); ?>
            <script>
                $('#editcouponmodal').on('show.bs.modal', function (event) {
                    console.log('Modal Opened');
                    var button = $(event.relatedTarget)
                    var coupon = button.data('coupon')
                    var discount = button.data('discount')
                    var coupon_id = button.data('couponid')
                    var modal = $(this)

                    modal.find('.modal-body #coupon').val(coupon);
                    modal.find('.modal-body #discount').val(discount);
                    modal.find('.modal-body #coupon_id').val(coupon_id);
                })
            </script>

        <?php $__env->stopPush(); ?>
        <?php $__env->startPush('scripts'); ?>
            <script type="text/javascript">
                <?php if(count($errors) > 0): ?>
                $('#addcouponmodal').modal('show');
                <?php endif; ?>
            </script>
    <?php $__env->stopPush(); ?>



<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/coupon/coupon.blade.php ENDPATH**/ ?>