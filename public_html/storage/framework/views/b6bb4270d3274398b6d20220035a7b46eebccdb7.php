<?php $__env->startSection('admin_content'); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Orders</a>
            <span class="breadcrumb-item active">View Orders</span>
        </nav>

        <div class="sl-pagebody">
            <div class="col-lg-12 text-right">
            <a class="btn btn-success" href="<?php echo e(url('pdf_download/'.$order->id)); ?>"><i class="fa fa-download mg-r-10"></i>Download Invoice</a>
            <a class="btn btn-primary" href="<?php echo e(url('pdf_view/'.$order->id)); ?>" target="_blank"><i class="fa fa-eye mg-r-10"></i>View Invoice</a>
            </div>
            <div class="row row-sm mg-t-20">
                <div class="col-lg-6">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Order Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <table class="table table-hover table-bordered table-primary mg-b-0">
                                <tbody style="background-color: #5B93D3;">
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">NAME -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->name); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PHONE NUMBER -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->phone); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">EMAIL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->email); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">DATE (D-M-Y) -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->date); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">MONTH -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->month); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">YEAR -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->year); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SUB TOTAL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">$<?php echo e($order->subtotal); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">TOTAL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">$<?php echo e($order->total); ?>.00</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PAYMENT TYPE -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->payment_type); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PAYMENT ID -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($order->payment_id); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->

                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Shipping Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <table class="table table-hover table-bordered table-primary mg-b-0">
                                <tbody style="background-color: #5B93D3;">
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">NAME -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_name); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING PHONE NUMBER -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_phone); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING EMAIL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_email); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING COUNTRY -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_country); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING ADDRESS -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_address); ?></td>
                                </tr>
                                <?php if($shipping->ship_apartment != NULL): ?>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">APARTMENT, SUITE, UNIT -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_apartment); ?></td>
                                </tr>
                                <?php else: ?>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">APARTMENT, SUITE, UNIT -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">N/A</td>
                                </tr>
                                <?php endif; ?>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING TOWN/CITY -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->ship_city); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">POSTCODE/ZIPCODE -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;"><?php echo e($shipping->zip_code); ?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">STATUS -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">
                                        <?php if($order->status == 0): ?>
                                            <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Pending</span>
                                        <?php elseif($order->status == 1): ?>
                                            <span class="badge badge bg-teal" style="font-size: 13px; color: white; padding: 10px;">Order Payment Accepted</span>
                                        <?php elseif($order->status == 2): ?>
                                            <span class="badge badge bg-orange" style="font-size: 13px; color: white; padding: 10px;">Delivery In Progress</span>
                                        <?php elseif($order->status == 3): ?>
                                            <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Order Delivered</span>
                                        <?php else: ?>
                                            <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 10px;">Order Cancelled</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-lg-12 mt-4">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Product Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <div class="table-wrapper">
                                    <table class="table table-hover table-bordered table-info">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Product ID</th>
                                            <th class="wd-15p">Product Name</th>
                                            <th class="wd-15p">Image</th>
                                            <th class="wd-15p">Color</th>
                                            <th class="wd-15p">Size</th>
                                            <th class="wd-15p">Quantity</th>
                                            <th class="wd-15p">Unit Price</th>
                                            <th class="wd-20p">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;"><?php echo e($row->product_code); ?></td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;"><?php echo e($row->product_name); ?></td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e; text-align: center;"> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" height="100px;" width="100px;"> </td>
                                                <?php if($row->color == NULL): ?>
                                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">N/A</td>
                                                <?php else: ?>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;"><?php echo e($row->color); ?></td>
                                                <?php endif; ?>
                                                <?php if($row->size == NULL): ?>
                                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">N/A</td>
                                                <?php else: ?>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;"><?php echo e($row->size); ?></td>
                                                <?php endif; ?>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;"><?php echo e($row->quantity); ?></td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">$<?php echo e($row->single_price); ?></td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">$<?php echo e($row->total_price); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div><!-- table-wrapper -->
                        </div><!-- table-responsive -->
                        <div class="card bd-0 mb-2">
                            <div class="card-header card-header-default bg-info">
                                ORDER NOTES
                            </div><!-- card-header -->
                            <div class="card-body bd bd-t-0" style="background-color: #2b333e;">
                                <?php if($shipping->order_note != NULL): ?>
                                    <p class="mg-b-0" style="font-size: 15px; color: white;"><?php echo e($shipping->order_note); ?></p>
                                <?php else: ?>
                                    <p class="mg-b-0" style="font-size: 15px; color: white;">N/A</p>
                                <?php endif; ?>
                            </div><!-- card-body -->
                        </div><!-- card -->
                        <div>
                            <?php if($order->status == 0): ?>
                                <a href="<?php echo e(url('admin/order/payment/accept/'.$order->id)); ?>" class="btn btn-info"><i class="fa fa-check"></i>  Accept Order</a>
                                <a href="<?php echo e(url('admin/order/payment/cancel/'.$order->id)); ?>" class="btn btn-danger"><i class="fa fa-window-close"></i> Cancel Order</a>
                            <?php elseif($order->status == 1): ?>
                                <a href="<?php echo e(url('admin/order/delivery/proceed/'.$order->id)); ?>" class="btn btn-info">Proceed To Delivery</a>
                            <?php elseif($order->status == 2): ?>
                                <a href="<?php echo e(url('admin/order/delivery/completed/'.$order->id)); ?>" class="btn btn-success"><i class="fa fa-check"></i> Delivery Completed</a>
                            <?php elseif($order->status == 4): ?>
                                <strong class="text-danger text-center"> This order is not valid.</strong>
                            <?php else: ?>
                                <strong class="text-success text-center">Products have been successfully delivered.</strong>
                            <?php endif; ?>
                        </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
            </div><!-- row -->


        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/order/view_order.blade.php ENDPATH**/ ?>