<?php $__env->startSection('admin_content'); ?>


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Stocks</a>
            <span class="breadcrumb-item active">Product Stocks</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product List With Quantity</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                        <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Sub-Category</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->product_code); ?></td>
                                <td class=""><?php echo e($row->product_name); ?></td>
                                <td style=""> <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" height="80px;" width="80px;"> </td>
                                <td style=""><?php echo e($row->category_name); ?></td>
                                <?php if($row->subcategory_name == NULL): ?>
                                    <td style="">N/A</td>
                                <?php else: ?>
                                    <td style=""><?php echo e($row->subcategory_name); ?></td>
                                <?php endif; ?>
                                <td style=""><?php echo e($row->product_quantity); ?></td>
                                <td style="">
                                    <?php if($row->status == 1): ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success updBtn" data-toggle="modal" data-target="#updateQuantitymodal"><i class="fa fa-sort"></i></a>
                                    <?php if($row->status == 1): ?>
                                        <a href="<?php echo e(URL::to('inactive/product/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Make Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(URL::to('active/product/'.$row->id)); ?>" class="btn btn-sm btn-info" title="Make Active"><i class="fa fa-thumbs-up"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
    </div>
    <!-- Add Category MODAL -->
    <div id="updateQuantitymodal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Product Quantity</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('update.stock')); ?>" method="POST" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
                    <div class="modal-body pd-20">
                        <div class="col-xl-12">
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                <input type="hidden" name="update_id" id="update_id">
                                <div class="row">
                                    <label class="col-sm-5 form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                        <input type="text" name="product_quantity" id="product_quantity" class="form-control" placeholder="Enter Product Quantity" required>
                                    </div>
                                </div><!-- row -->
                            </div><!-- card -->
                        </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function (){
            $('.updBtn').on('click',function (){
                $('#updateQuantitymodal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function (){
                    return $(this).text();
                }).get();
                console.log(data);
                $('#update_id').val(data[0]);
                $('#product_quantity').val(data[5]);
            });
        });
    </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/stock/stock.blade.php ENDPATH**/ ?>