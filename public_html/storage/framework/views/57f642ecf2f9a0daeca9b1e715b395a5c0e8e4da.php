<?php $__env->startSection('admin_content'); ?>

        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
                <a class="breadcrumb-item" href="">Orders</a>
                <span class="breadcrumb-item active">
                Search Report
            </span>
            </nav>

            <div class="sl-pagebody">
                <div class="sl-page-title">
                    <h5>Search Orders Report</h5>
                </div><!-- sl-page-title -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card pd-20 pd-sm-40">
                            <div class="table-wrapper">
                                <form method="post" action="<?php echo e(route('search.byDate')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body pd-20">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Search By Date</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="date" required>
                                        </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                    </div>
                                </form>
                            </div><!-- table-wrapper -->
                        </div><!-- card -->
                    </div>

                    <div class="col-lg-4">
                        <div class="card pd-20 pd-sm-40">
                            <div class="table-wrapper">
                                <form method="post" action="<?php echo e(route('search.byMonth')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body pd-20">
                                        <div class="row col-xl-12 p-0">
                                        <div class="form-group col-md-7">
                                            <label for="exampleInputEmail1">Select Month</label>
                                            <select class="form-control" name="month" required>
                                                <option value="january">January</option>
                                                <option value="february">February</option>
                                                <option value="march">March</option>
                                                <option value="april">April</option>
                                                <option value="may">May</option>
                                                <option value="jun">June</option>
                                                <option value="july">July</option>
                                                <option value="august">August</option>
                                                <option value="september">September</option>
                                                <option value="october">October</option>
                                                <option value="november">November</option>
                                                <option value="december">December</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="exampleInputEmail1">Select Year</label>
                                            <select class="form-control" name="year" required>
                                                <option value="2020">2020</option>
                                                <option value="2021" selected>2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                    </div>
                                </form>
                            </div><!-- table-wrapper -->
                        </div><!-- card -->
                    </div>

                    <div class="col-lg-4">
                        <div class="card pd-20 pd-sm-40">
                            <div class="table-wrapper">
                                <form method="post" action="<?php echo e(route('search.byYear')); ?>" >
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body pd-20">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Search By Year</label>
                                            <select class="form-control" name="year" required>
                                                <option value="2020">2020</option>
                                                <option value="2021" selected>2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div><!-- modal-body -->
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                                </div>
                                </form>
                            </div><!-- table-wrapper -->
                        </div><!-- card -->
                    </div>
                </div>
            </div>
        </div><!-- sl-mainpanel -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/admin/report/search_report.blade.php ENDPATH**/ ?>