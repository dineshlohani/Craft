@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Site Setting</a>
            <span class="breadcrumb-item active">Manage Site Setting</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Site Setting</h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <form method="POST" action="{{ route('update.site-setting') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Site Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" value="{{ $setting->email }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" value="{{ $setting->phone }}"  required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number(Optional): <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone1" value="{{ $setting->phone1 }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="address" value="{{ $setting->address }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Facebook Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="fb_link" value="{{ $setting->fb_link }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Instagram Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="insta_link" value="{{ $setting->insta_link }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">YouTube Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="ytube_link" value="{{ $setting->ytube_link }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Twitter Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="twitter_link" value="{{ $setting->twitter_link }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Shipping: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="shipping_charge" value="{{ $setting->shipping_charge }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Vat: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="vat" value="{{ $setting->vat }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <input type="hidden" name="id" value="{{ $setting->id }}">
                        </div><!-- row -->
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Site Setting</button>
                            <a href="{{route('admin.home')}}" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


@endsection



