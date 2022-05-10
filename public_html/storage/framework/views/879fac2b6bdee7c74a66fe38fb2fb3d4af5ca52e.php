<?php $__env->startSection('admin_content'); ?>
    <br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Change Password</strong></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(Route('admin.password.update')); ?>" aria-label="<?php echo e(__('Reset Password')); ?>">
                        <?php echo csrf_field(); ?>

                        <!--  -->

                        <div class="form-group row">
                            <label for="oldpass" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Old Password')); ?></label>

                            <div class="col-md-6">
                                <input id="oldpass" type="password" class="form-control<?php echo e($errors->has('oldpass') ? ' is-invalid' : ''); ?>" name="oldpass" value="<?php echo e($oldpass ?? old('oldpass')); ?>" required autofocus>

                                <?php if($errors->has('oldpass')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('oldpass')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('New Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Reset Password')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/auth/passwordchange.blade.php ENDPATH**/ ?>