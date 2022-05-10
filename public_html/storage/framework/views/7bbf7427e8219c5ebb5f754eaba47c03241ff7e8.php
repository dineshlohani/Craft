<?php $__env->startSection('title', 'Contact Us-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="<?php echo e(asset('public/frontend/assets/images/bg/page-title-1.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Contact us</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact us</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Contact Information & Map Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Keep in touch with us</h2>
            <p>Been tearing your hair out to find the perfect gift for your loved ones? Try visiting our nationwide local stores. You can also contact us to become partner or distributor. Call us, send us an email or make an appointment now.</p>
        </div>
        <!-- Section Title End -->

        <!-- Contact Information Start -->
        <div class="row learts-mb-n30">
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">ADDRESS</h4>
                    <span class="info"><i class="icon fal fa-map-marker-alt"></i> <?php echo e($setting->address); ?></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">CONTACT</h4>
                    <span class="info"><i class="icon fal fa-phone-alt"></i> Phone: <?php echo e($setting->phone); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($setting->phone1); ?></span>
                    <span class="info"><i class="icon fal fa-envelope"></i> Mail: <a><?php echo e($setting->email); ?></a></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">Factory Location</h4>
                    <span class="info"><i class="icon fas fa-store"></i>Dallu, Kathmandu, Nepal</span>
                </div>
            </div>
        </div>
        <!-- Contact Information End -->

        <!-- Contact Map Start -->
        <div class="row learts-mt-60">
            <div class="col">
                <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.174543018109!2d85.29566346490154!3d27.71189668278995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18f3e75c6c31%3A0xc7cefd747f90ca11!2sDallu%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1612181383815!5m2!1sen!2snp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- Contact Map End -->

    </div>
</div>
<!-- Contact Information & Map Section End -->

<!-- Contact Form Section Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Send a message</h2>
        </div>
        <!-- Section Title End -->

        <div class="row">
            <div class="col-lg-8 col-12 mx-auto">
                <div class="contact-form">
                    <form action="<?php echo e(route('store.message')); ?>" method="post"><?php echo csrf_field(); ?>
                        <div class="row learts-mb-n30">
                            <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *" name="name"></div>
                            <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *" name="email"></div>
                            <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                            <div class="col-12 text-center learts-mb-30"><button type="submit" class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Contact Form Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/contact.blade.php ENDPATH**/ ?>