<?php $__env->startSection('title', 'My Profile-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- My Account Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n30">

                <!-- My Account Tab List Start -->
                <div class="col-lg-4 col-12 learts-mb-30">
                        <ul class="myaccount-tab-list nav" id="myTab">
                            <div class="image col-lg-8 mt-3 mb-3" style="margin-left: auto; margin-right: auto;">
                                <figure>
                                    <img src="<?php echo e(asset('public/frontend/assets/images/avatar.png')); ?>" alt="" style="border-radius: 50%;">
                                    <figcaption class="text-center"><i><p style="font-family:cursive; font-weight: bold; color: 6e736f#; "><?php echo e(Auth::user()->name); ?></p></i></figcaption>
                                </figure>
                            </div>
                        <li><a href="#dashboard" class="nav-link active" data-toggle="tab">Dashboard <i class="far fa-home"></i></a></li>
                        <li><a href="#orders" class="nav-link" data-toggle="tab">My Orders <i class="far fa-box-full"></i></a></li>
                        <li><a href="#return_orders" class="nav-link" data-toggle="tab">Request Order Return <i class="fas fa-people-carry"></i></a></li>
                        <li><a href="#account-info" class="nav-link" data-toggle="tab">Change Password<i class="fas fa-key "></i></a></li>
                        <li><a href="<?php echo e(route('user.logout')); ?>">Logout <i class="far fa-sign-out-alt"></i></a></li>
                        </ul>
                </div>
                <!-- My Account Tab List End -->

                <!-- My Account Tab Content Start -->
                <div class="col-lg-8 col-12 learts-mb-30">
                    <div class="tab-content">
                        <!-- Dashboard Tab Content Start -->
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="myaccount-content dashboad">
                                <p>Hello <strong><?php echo e(Auth::user()->name); ?></strong> (not <strong><?php echo e(Auth::user()->name); ?></strong>? <a href="<?php echo e(route('user.logout')); ?>">Log out</a>)</p>
                                <p>From here you can view your <span>recent orders</span>, track <span>order status</span>, and <span>edit your password and account details</span>.</p>
                            </div>
                        </div>
                        <!-- Dashboard Tab Content End -->

                        <!-- Orders Tab Content Start -->
                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content order">
                                <p>You can cancel your order only when order status is pending.</p>
                                <div class="text-right mb-2">
                                    <a onClick="window.location.reload();" class="btn btn-md btn-secondary" style="color: white;"><i class="fas fa-sync"></i> Refresh</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Date(D-M-Y)</th>
                                            <th>Payment Type</th>
                                            <th>Order Stauts</th>
                                            <th>Order Code</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $order ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($row->date); ?></td>
                                            <td><?php echo e($row->payment_type); ?></td>
                                            <td>
                                                <?php if($row->status == 0): ?>
                                                    <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Pending</span>
                                                <?php elseif($row->status == 1): ?>
                                                    <span class="badge badge-info" style="font-size: 13px; color: white; padding: 10px;">Order Accepted</span>
                                                <?php elseif($row->status == 2): ?>
                                                    <span class="badge badge-primary" style="font-size: 13px; color: white; padding: 10px;">Delivery In Progress</span>
                                                <?php elseif($row->status == 3): ?>
                                                    <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Order Delivered</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 10px;">Order Cancelled</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($row->status_code); ?></td>
                                            <td>$<?php echo e($row->total); ?>.00</td>
                                            <td>
                                                <a class="btn btn-sm btn-info mb-1" href="<?php echo e(URL::to('order/view/'.$row->id)); ?>">View</a>
                                                <br>
                                                <?php if($row->status == 0): ?>
                                                <a class="btn btn-sm btn-danger pl-3 pr-3" id="cancel" href="<?php echo e(URL::to('order/cancel/'.$row->id)); ?>">Cancel</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Orders Tab Content End -->

                        <!-- Return Orders Tab Content Start -->
                        <div class="tab-pane fade" id="return_orders">
                            <div class="myaccount-content order">
                                <div class="text-right mb-2">
                                    <a onClick="window.location.reload();" class="btn btn-md btn-secondary" style="color: white;"><i class="fas fa-sync"></i> Refresh</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Order Date(D-M-Y)</th>
                                            <th>Payment Type</th>
                                            <th>Return Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $return_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($row->date); ?></td>
                                                <td><?php echo e($row->payment_type); ?></td>
                                                <td>
                                                    <?php if($row->return_order == 0): ?>
                                                        <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Not Requested</span>
                                                    <?php elseif($row->return_order == 1): ?>
                                                        <span class="badge badge-info" style="font-size: 13px; color: white; padding: 10px;">Request Pending</span>
                                                    <?php elseif($row->return_order == 2): ?>
                                                        <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Return Success</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>$<?php echo e($row->total); ?>.00</td>
                                                <td>
                                                    <?php if($row->return_order == 0): ?>
                                                    <a class="btn btn-sm btn-danger" id="return" href="<?php echo e(URL::to('order/return/request/'.$row->id)); ?>">Return</a>
                                                    <?php endif; ?>
                                                    <a class="btn btn-sm btn-primary2" href="<?php echo e(URL::to('order/view/'.$row->id)); ?>">View</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Return Orders Tab Content End -->

                        <!-- Manage Password Tab Content Start -->
                        <div class="tab-pane fade" id="account-info">
                            <div class="myaccount-content account-details">
                                <div class="account-details-form">
                                    <form action="<?php echo e(route('password.update')); ?>" method="POST"><?php echo csrf_field(); ?>
                                        <div class="row learts-mb-n30">
                                            <div class="col-12 learts-mb-30 learts-mt-30">
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="row learts-mb-n30">
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="current-pwd">Current password</label>

                                                            <input id="oldpass" type="password" class="form-control<?php echo e($errors->has('oldpass') ? ' is-invalid' : ''); ?>" name="oldpass" value="<?php echo e($oldpass ?? old('oldpass')); ?>" required autofocus>
                                                            <?php if($errors->has('oldpass')): ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($errors->first('oldpass')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="new-pwd">New password</label>

                                                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                                            <?php if($errors->has('password')): ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="confirm-pwd">Confirm New password</label>

                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 learts-mb-30">
                                                <button class="btn btn-dark btn-outline-hover-dark">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Manage Password Content End -->

                    </div>
                </div> <!-- My Account Tab Content End -->
            </div>
        </div>
    </div>
    <!-- My Account Section End -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if(activeTab){
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/home.blade.php ENDPATH**/ ?>