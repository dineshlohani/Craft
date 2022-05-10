<?php $__env->startSection('title', 'About Us-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="<?php echo e(asset('public/frontend/assets/images/bg/page-title-1.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">About us</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="breadcrumb-item active">About us</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- About Section Start -->
    <div class="section section-padding pb-0">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-md-6 col-12 align-self-center learts-mb-30">
                    <div class="about-us3">
                        <h2 class="title"><?php echo e($about_info->about_title); ?></h2>
                        <div class="desc">
                            <p><?php echo $about_info->about_desc; ?>  </p>
                        </div>
                        <a class="link">Have a good day!</a>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center learts-mb-30">
                    <img src="<?php echo e(URL::to($about_info->about_image)); ?>" alt="">
                </div>

            </div>
        </div>

    </div>
    <!-- About Section End -->

    <!-- Feature Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-md-3 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title">FREE SHIPPING</h6>
                                <p><?php echo e($about_info->ship_info); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col border-left border-right learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title">FREE RETURNS</h6>
                                <p><?php echo e($about_info->return_info); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title">SECURE PAYMENT</h6>
                                <img class="img-hover-color " src="<?php echo e(asset('public/frontend/assets/images/others/pay.png')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Video Banner Section Start -->
    <div class="section">
        <div class="container">
            <div class="video-banner2" data-bg-image="<?php echo e(URL::to($about_info->video_link_image)); ?>">
                <div class="content">
                    <a href="<?php echo e($about_info->video_link); ?>" target="_blank">
                        <img src="<?php echo e(asset('public/frontend/assets/images/icons/button-play-light.png')); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Banner Section End -->

    <!-- Feature Section Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="row learts-mb-n30">

                <div class="col-xl-3 col-lg-4 col-12 mr-auto learts-mb-30">
                    <h1 class="fw-400">The difference when you shop Crafts Man Nepal!</h1>
                </div>
                <div class="col-lg-8 col-12 learts-mb-30">
                    <div class="row learts-mb-n30">
                        <?php if($about_info->ship_info != NULL): ?>
                            <div class="col-md-6 col-12 learts-mb-30">
                                <p class="text-heading fw-600 learts-mb-10">Free Shipping</p>
                                <p><?php echo e($about_info->ship_info); ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($about_info->return_info != NULL): ?>
                            <div class="col-md-6 col-12 learts-mb-30">
                                <p class="text-heading fw-600 learts-mb-10">Free Returns</p>
                                <p><?php echo e($about_info->return_info); ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($about_info->quality_info != NULL): ?>
                            <div class="col-md-6 col-12 learts-mb-30">
                                <p class="text-heading fw-600 learts-mb-10">Superb Quality</p>
                                <p><?php echo e($about_info->quality_info); ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($about_info->wrapping_info != NULL): ?>
                            <div class="col-md-6 col-12 learts-mb-30">
                                <p class="text-heading fw-600 learts-mb-10">Free Wrapping</p>
                                <p><?php echo e($about_info->wrapping_info); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Instagram Section Start -->
    <div class="section section-padding border-top">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">@craftsmannepal</h2>
                <p class="fw-400">Follow us on Instagram</p>
            </div>
            <!-- Section Title End -->

            
            
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-b5b23511-1efd-4a7b-a43f-fbb7da8f9bff"></div>

        </div>
    </div>
    <!-- Instagram Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/about.blade.php ENDPATH**/ ?>