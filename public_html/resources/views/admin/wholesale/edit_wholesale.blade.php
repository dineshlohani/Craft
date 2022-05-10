@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Site Setting</a>
            <span class="breadcrumb-item active">Edit WholeSeller Information</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">WholeSeller Information</h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                <form method="POST" action="{{ route('admin.wholesale.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">WholeSeller Information: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" name="desc" required>{{ $wholesale->desc }}</textarea>
                                </div>
                            </div><!-- col-4 -->
                            <input type="hidden" name="id" value="{{ $wholesale->id }}">
                        </div><!-- row -->
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update WholeSeller Information</button>
                            <a href="{{route('admin.home')}}" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


@endsection



