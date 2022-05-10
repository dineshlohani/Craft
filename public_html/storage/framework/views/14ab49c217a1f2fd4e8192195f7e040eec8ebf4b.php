<?php $__env->startSection('title', 'Our Policies-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>


    <!-- Portfolio Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title title-icon-both">Privacy Policy</h2>
        </div>
        <!-- Section Title End -->
        <?php $__currentLoopData = $policy_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Section Content Start -->
        <div class="col-xl-12 pb-4">
            <h2 class="title title" style="font-size: 25px;"><?php echo e($key +1); ?>. <?php echo e($row->title); ?></h2>
            <p><?php echo $row->desc; ?></p>
        </div>
        <!-- Section Contact End -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/policies.blade.php ENDPATH**/ ?>