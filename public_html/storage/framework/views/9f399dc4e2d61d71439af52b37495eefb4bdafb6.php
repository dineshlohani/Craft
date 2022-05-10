<?php $__env->startSection('admin_content'); ?>


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Offers</a>
            <span class="breadcrumb-item active">Offers List</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Offers List
                </h6>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Deal of The Week
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddealoftheweek" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>


                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

                                    <table class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                        <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                    <?php if(count($deal_of_the_week)>0): ?>
                                    <?php $__currentLoopData = $deal_of_the_week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dofd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($dofd->product_code); ?></td>
                                            <td class=""><?php echo e($dofd->product_name); ?></td>
                                            <td style=""> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($dofd->filename, true)[0])); ?>" height="80px;" width="80px;"> </td>
                                            <td><a href="<?php echo e(URL::to('remove/deal_of_week/'.$dofd->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No Deal of the week Item Added.</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                    </table>



                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   Best Seller
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addbestselling" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">

                                <table class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                    <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($best_selling)>0): ?>
                                    <?php $__currentLoopData = $best_selling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($bs->product_code); ?></td>
                                            <td class=""><?php echo e($bs->product_name); ?></td>
                                            <td style=""> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($bs->filename, true)[0])); ?>" height="80px;" width="80px;"> </td>
                                            <td><a href="<?php echo e(URL::to('remove/best_seller/'.$bs->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No Best Seeling Item Added.</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   New Arrivals
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnewarrivals" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <table  class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                    <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($new_arrivals)>0): ?>
                                    <?php $__currentLoopData = $new_arrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $na): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($na->product_code); ?></td>
                                            <td class=""><?php echo e($na->product_name); ?></td>
                                            <td style=""> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($na->filename, true)[0])); ?>" height="80px;" width="80px;"> </td>
                                            <td><a href="<?php echo e(URL::to('remove/new_arrival/'.$na->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No New Arrivals Item Added.</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
    </div>

    <!-- Modal Deal of the week -->
    <div class="modal fade" id="adddealoftheweek" tabindex="-1" role="dialog" aria-labelledby="adddealoftheweek" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Deal of The Week</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(route('add.dealoftheweek')); ?>"><?php echo csrf_field(); ?>

                <div class="modal-body">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                    <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                        <option selected>Choose...</option>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>




                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Best Selling -->
    <div class="modal fade" id="addbestselling" tabindex="-1" role="dialog" aria-labelledby="addbestselling" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Best Selling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(route('add.bestselling')); ?>"><?php echo csrf_field(); ?>

                    <div class="modal-body">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                        <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                            <option selected>Choose...</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?>

                                    <img src="<?php echo e(URL::to('public/media/product/'.json_decode($product->filename, true)[0])); ?>" height="80px;" width="80px;">
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>




                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal New Arrivals -->
    <div class="modal fade" id="addnewarrivals" tabindex="-1" role="dialog" aria-labelledby="addnewarrivals" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Best Selling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(route('add.newarrivals')); ?>"><?php echo csrf_field(); ?>

                    <div class="modal-body">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                        <select title="Select your surfboard" class="selectpicker">
                            <option>Select...</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option data-content="<img src='<?php echo e(URL::to('public/media/product/'.json_decode($product->filename, true)[0])); ?>'>"><?php echo e($product->id); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                            <option selected>Choose...</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>




                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/offer/offer.blade.php ENDPATH**/ ?>