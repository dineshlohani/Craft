@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Coupon</a>
            <span class="breadcrumb-item active">View Coupon</span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Coupon List
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addcouponmodal" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Coupon Code</th>
                            <th class="wd-15p">Discount Amount($)</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coupon as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->coupon }}</td>
                                <td>${{ $row->discount }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary mg-b-10" data-coupon="{{ $row->coupon }}" data-discount="{{ $row->discount }}" data-couponid="{{ $row->id }}" data-toggle="modal" data-target="#editcouponmodal"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="{{ URL::to('delete/coupon/'.$row->id) }}" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        <!-- Add Category MODAL -->
        <div id="addcouponmodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Coupon</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('store.coupon')}}" method="POST">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="col-xl-12">
                                {{--                    Error Message for Validation--}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{--                    End Error Message for Validation--}}
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="coupon" class="form-control" placeholder="Enter Coupon Code" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Discount($): <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="discount" class="form-control" placeholder="Enter Coupon Discount" required>
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

        <!-- Edit Category MODAL -->
        <div id="editcouponmodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Coupon</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('update.coupon','edit')}}" method="POST">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="col-xl-12">
                                <input type="hidden" name="coupon_id" id="coupon_id" value="">
                                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" id="coupon" name="coupon" class="form-control" required>
                                        </div>
                                    </div><!-- row -->
                                    <br>
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Coupon Discount(%): <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" id="discount" name="discount" class="form-control" required>
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

        @endsection


        @push('scripts')
            <script>
                $('#editcouponmodal').on('show.bs.modal', function (event) {
                    console.log('Modal Opened');
                    var button = $(event.relatedTarget)
                    var coupon = button.data('coupon')
                    var discount = button.data('discount')
                    var coupon_id = button.data('couponid')
                    var modal = $(this)

                    modal.find('.modal-body #coupon').val(coupon);
                    modal.find('.modal-body #discount').val(discount);
                    modal.find('.modal-body #coupon_id').val(coupon_id);
                })
            </script>

        @endpush
        @push('scripts')
            <script type="text/javascript">
                @if (count($errors) > 0)
                $('#addcouponmodal').modal('show');
                @endif
            </script>
    @endpush


