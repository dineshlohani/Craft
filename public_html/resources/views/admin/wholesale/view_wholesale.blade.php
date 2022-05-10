@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Site Settings</a>
            <span class="breadcrumb-item active">View Wholesale Information</span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">WholeSeller Information
                    <a href="{{route('admin.wholesale.edit')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-edit mg-r-10"></i>Edit This Information</a>
                </h6>
                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" style="font-size: 20px; font-family: serif; color: black;">Details For WholeSeller</label>
                                <br><hr>
                                <p>{!! $wholesale->desc !!}</p>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->
                </div>
            </div><!-- form-layout -->
        </div><!-- card -->
    </div>
    </div>

@endsection



