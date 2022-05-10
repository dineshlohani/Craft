@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Users</a>
            <span class="breadcrumb-item active">View Users</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Admins List
                    <a href="{{ route('admin.create.user') }}" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of admins with access privileges.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-5p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Phone</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-15p">Access</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $key=>$row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    @if($row->category == 1)
                                        <span class="badge btn-danger">Category</span>
                                    @endif
                                    @if($row->product == 1)
                                        <span class="badge btn-info">Product</span>
                                    @endif
                                    @if($row->orders == 1)
                                        <span class="badge btn-warning">Orders</span>
                                    @endif
                                    @if($row->report == 1)
                                        <span class="badge btn-primary">Order Report </span>
                                    @endif
                                    @if($row->users == 1)
                                        <span class="badge btn-success">Users & Role </span>
                                    @endif
                                    @if($row->return_order == 1)
                                        <span class="badge btn-danger">Order Return </span>
                                    @endif
                                    @if($row->product_review == 1)
                                        <span class="badge btn-info">Product Review </span>
                                    @endif
                                    @if($row->coupon == 1)
                                        <span class="badge btn-warning">Coupon </span>
                                    @endif
                                    @if($row->newsletter == 1)
                                        <span class="badge btn-primary">Newsletter </span>
                                    @else
                                    @endif
                                    @if($row->seo_setting == 1)
                                        <span class="badge btn-success">Seo Setting </span>
                                    @endif
                                    @if($row->type == 1)
                                        <span class="badge btn-danger">Type </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('admin/user/edit/'.$row->id) }}" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="{{ URL::to('admin/user/delete/'.$row->id) }}" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

    @endsection



