<?php $__env->startSection('title', 'FAQs-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Portfolio Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title title-icon-both">FAQs</h2>
            </div>
            <div class="col learts-mb-40">
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="faq-toggles">
                        <?php $__currentLoopData = $faq_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->id == 1): ?>
                        <div class="card active">
                            <div class="card-header">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#faq-toggles-<?php echo e($key+1); ?>"><?php echo e($key+1); ?>. <?php echo e($row->title); ?></button>
                            </div>
                            <div id="faq-toggles-<?php echo e($key+1); ?>" class="collapse show">
                                <div class="card-body">
                                    <p><?php echo $row->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-toggles-<?php echo e($key+1); ?>"><?php echo e($key+1); ?>. <?php echo e($row->title); ?></button>
                            </div>

                            <div id="faq-toggles-<?php echo e($key+1); ?>" class="collapse">
                                <div class="card-body">
                                    <p><?php echo $row->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/faq.blade.php ENDPATH**/ ?>