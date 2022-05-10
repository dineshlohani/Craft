<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/frontend/assets/images/favicon.png')); ?>">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/vendor/vendor.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/plugins/plugins.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/style1.min.css')); ?>">
    <!-- Tosater css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <script src="https://js.stripe.com/v3/"></script>

</head>

<body>

<!-- Topbar Section Start -->
<div class="topbar-section section bg-primary2">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-12">
                <p class="text-white text-center text-md-left my-2">Free shipping for orders over $100 !</p>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="topbar-menu">
                    <?php if(auth()->guard()->guest()): ?>
                        <ul>
                            <li><a href="<?php echo e(route('login')); ?>" class="text-white"><i class="fa fa-sign-in"></i>Sign In</a></li>
                            <li><a href="<?php echo e(route('login')); ?>" class="text-white"><i class="fa fa-user-plus"></i>Register</a></li>
                        </ul>
                    <?php else: ?>
                        <ul>
                        <button type="button" class="btn btn-md btn-primary2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-truck"></i> My Order Tracking</button>
                        <div class="dropdown">
                            <button class="btn btn-md btn-primary2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user-circle"></i> Profile
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo e(route('home')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                                <a class="dropdown-item" href="<?php echo e(route('show.cart')); ?>"><i class="fas fa-shopping-cart"></i> My Cart</a>
                                <a class="dropdown-item" href="<?php echo e(route('show.wishlist')); ?>"><i class="fas fa-heart"></i> My Wishlist</a>
                                <a class="dropdown-item" href="<?php echo e(route('user.logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Topbar Section End -->
<?php echo $__env->make('layouts.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<div class="footer1-section section section-padding">
    <div class="container">
        <div class="row text-center row-cols-1">

            <div class="footer1-logo col text-center">
                <img src="<?php echo e(asset('public/frontend/assets/images/logo/logos.png')); ?>" alt="">
            </div>

            <div class="footer1-menu col">
                <ul class="widget-menu justify-content-center">
                    <li><a href="<?php echo e(route('about')); ?>">About us</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    <li><a href="<?php echo e(route('wholeseller')); ?>">Wholeseller</a></li>
                    <li><a href="<?php echo e(route('policies')); ?>">Policy</a></li>
                    <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
                </ul>
            </div>
            <div class="footer1-subscribe d-flex flex-column col">
                <form action="<?php echo e(route('store.newsletter')); ?>" method="POST" class="mc-form widget-subscibe">
                    <?php echo csrf_field(); ?>
                    <input id="mc-email" name="email" autocomplete="off" type="email" placeholder="Enter your e-mail address" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button id="mc-submit" class="btn btn-dark" type="submit">subscribe</button>
                </form>
            </div>
            <div class="footer1-social col">
                <ul class="widget-social justify-content-center">
                    <li class="hintT-top" data-hint="Twitter"> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li class="hintT-top" data-hint="Facebook"> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="hintT-top" data-hint="Instagram"> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    <li class="hintT-top" data-hint="Youtube"> <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer1-copyright col">
                <p class="copyright">&copy;<?php echo e(date('Y')); ?> CraftsManNepal Pvt.Ltd. All Rights Reserved | <a href="mailto:info@craftsmannepal.com">info@craftsmannepal.com</a></p>
            </div>

        </div>
    </div>
</div>

<!-- Order Tracking Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Tracking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('order.tracking')); ?>"><?php echo csrf_field(); ?>
            <div class="modal-body">
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Order Code</label>
                        <input type="text" name="code" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Order Code">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary">Track Now</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- JS
============================================ -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="<?php echo e(asset('public/frontend/assets/js/vendor/vendor.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/assets/js/plugins/plugins.min.js')); ?>"></script>

<!-- Main Activation JS -->
<script src="<?php echo e(asset('public/frontend/assets/js/main.js')); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    <?php if(Session::has('messege')): ?>
    var type="<?php echo e(Session::get('alert-type','info')); ?>"
    switch(type){
        case 'info':
            toastr.info("<?php echo e(Session::get('messege')); ?>");
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('messege')); ?>");
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('messege')); ?>");
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('messege')); ?>");
            break;
    }
    <?php endif; ?>
</script>

<script>
    $(document).on("click", "#return", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, return it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
</script>

<script>
    $(document).on("click", "#cancel", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, cancel it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
</script>


</body>


</html>
<?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>