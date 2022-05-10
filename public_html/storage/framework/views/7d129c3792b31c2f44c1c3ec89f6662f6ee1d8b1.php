<?php $__env->startSection('title', 'LogIn/SignUp-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

<style>

    .social-button {
        background-position: 25px 0px;
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        cursor: pointer;
        display: inline-block;
        height: 50px;
        line-height: 50px;
        /*text-align: left;*/
        text-decoration: none;
        text-transform: uppercase;
        vertical-align: middle;
        width: 100%;
        border-radius: 3px;
        margin: 10px auto;
        outline: rgb(255, 255, 255) none 0px;
        padding-left: 27%;
        transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    #facebook-connect {
        background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
        border: 1px solid rgb(60, 90, 154);
    }

    #facebook-connect:hover {
        border-color: rgb(60, 90, 154);
        background: rgb(60, 90, 154) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook-white.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
        -webkit-transition: all .8s ease-out;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease-out;
    }

    #facebook-connect span {
        box-sizing: border-box;
        color: rgb(60, 90, 154);
        cursor: pointer;
        text-align: center;
        text-transform: uppercase;
        border: 0px none rgb(255, 255, 255);
        outline: rgb(255, 255, 255) none 0px;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    #facebook-connect:hover span {
        color: #FFF;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    #google-connect {
        background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
        border: 1px solid rgb(220, 74, 61);
    }

    #google-connect:hover {
        border-color: rgb(220, 74, 61);
        background: rgb(220, 74, 61) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus-white.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
        -webkit-transition: all .8s ease-out;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease-out;
    }

    #google-connect span {
        box-sizing: border-box;
        color: rgb(220, 74, 61);
        cursor: pointer;
        text-align: center;
        text-transform: uppercase;
        border: 0px none rgb(220, 74, 61);
        outline: rgb(255, 255, 255) none 0px;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    #google-connect:hover span {
        color: #FFF;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

</style>

<!-- Login & Register Section Start -->
<div class="section section mt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="user-login-register bg-light">
                    <div class="login-register-title">
                        <h2 class="title">Login</h2>
                        <p class="desc">Great to have you back!</p>
                    </div>
                    <div class="login-register-form">
                        <form action="<?php echo e(route('login')); ?>" method="POST"><?php echo csrf_field(); ?>
                            <div class="row learts-mb-n50">
                                <div class="col-12 learts-mb-50">
                                    <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email address / Phone Number">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 learts-mb-50">
                                    <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Password" required></div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark" type="submit">login</button>
                                </div>
                                <div class="col-12 learts-mb-50">
                                    <div class="row learts-mb-n20">
                                        <div class="col-12 learts-mb-20">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12 learts-mb-20">
                                            <a href="<?php echo e(route('password.request')); ?>" class="fw-400">Lost your password?</a>
                                        </div>

                                        <a href="<?php echo e(url('/auth/redirect/google')); ?>" class="social-button" id="google-connect"> <span>Connect with Google</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-login-register bg-light">
                    <div class="login-register-title">
                        <h2 class="title">Register</h2>
                        <p class="desc">If you don’t have an account, register now!</p>
                    </div>
                    <div class="login-register-form">
                        <form action="<?php echo e(route('register')); ?>" method="POST"><?php echo csrf_field(); ?>
                            <div class="row learts-mb-n50">
                                <div class="col-12 learts-mb-20">
                                    <label for="fullName">Full Name <abbr class="required">*</abbr></label>
                                    <input type="text" id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Enter your Full Name">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="phoneNum">Phone Number <abbr class="required">*</abbr></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required placeholder="Enter your Phone Number">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="registerEmail">Email address <abbr class="required">*</abbr></label>
                                    <input type="email" id="register_email" class="form-control <?php $__errorArgs = ['register_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="register_email" value="<?php echo e(old('register_email')); ?>" required placeholder="Enter your E-mail Address">
                                    <?php $__errorArgs = ['register_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="password">Password <abbr class="required">*</abbr></label>
                                    <input type="password" id="register_password" class="form-control <?php $__errorArgs = ['register_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="register_password" required placeholder="Enter your Password">
                                    <?php $__errorArgs = ['register_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <label for="password">Confirm Password <abbr class="required">*</abbr></label>
                                    <input type="password" id="register_password_confirmation" name="register_password_confirmation" required placeholder="Re-Type Your Password">
                                </div>
                                <div class="col-12 learts-mb-50">
                                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
                                </div>
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Login & Register Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>