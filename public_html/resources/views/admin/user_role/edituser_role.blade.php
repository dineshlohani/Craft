@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Users</a>
            <span class="breadcrumb-item active">Edit Users</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add New Admin
                    <a href="{{ route('admin.all.user') }}" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Admins</a>
                </h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <form method="POST" action="{{ route('admin.update.user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name"  placeholder="Enter User Name" required="" value="{{ $user->name }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone"  placeholder="Enter Phone Number" required="" value="{{ $user->phone }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"  placeholder="Enter Email Address" required="" value="{{ $user->email }}">
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <hr><br>
                        <div class="row">

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="category" value="1" <?php
                                        if ($user->category ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Category</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="product" value="1"
                                    <?php
                                        if ($user->product ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Products</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="orders" value="1"
                                    <?php
                                        if ($user->orders ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Orders</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="report" value="1"
                                    <?php
                                        if ($user->report ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Order Reports</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="users" value="1"
                                    <?php
                                        if ($user->users ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Users/Roles</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="return_order" value="1"
                                    <?php
                                        if ($user->return_order ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Return Orders</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="product_review" value="1"
                                    <?php
                                        if ($user->product_review ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Product Reviews</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="coupon" value="1"
                                    <?php
                                        if ($user->coupon ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Coupons</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="newsletter" value="1"
                                    <?php
                                        if ($user->newsletter ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Newsletter</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="seo_setting" value="1"
                                    <?php
                                        if ($user->seo_setting ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Seo Settings</span>
                                </label>
                            </div> <!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="site_setting" value="1"
                                    <?php
                                        if ($user->site_setting ==1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Site Settings</span>
                                </label>
                            </div> <!-- col-4 -->
                            <input type="hidden" name="id" value="{{ $user->id }}">
                        </div><!-- end row -->
                        <hr><br>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Admin</button>
                            <a href="{{route('admin.all.user')}}" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


@endsection



