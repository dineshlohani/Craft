@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Report</a>
            <span class="breadcrumb-item active">
                Search By Month Result
            </span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h4 class="card-body-title">
                    Search Result for {{ $month }} of {{ $year }}:
                    <br><br>
                    Total Amount Received in {{ $month }}: ${{ $total }}.00
                    <br><br>
                    Total Order Completed in {{ $month }}: {{ $count }}
                    <a href="" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Orders</a>
                </h4>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">S.N</th>
                            <th class="wd-15p">Order-ID</th>
                            <th class="wd-15p">Date(D-M-Y)</th>
                            <th class="wd-15p">Payment Type</th>
                            <th class="wd-15p">Transaction ID</th>
                            <th class="wd-15p">Shipping</th>
                            <th class="wd-15p">Vat</th>
                            <th class="wd-15p">SubTotal</th>
                            <th class="wd-15p">Total</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->order_code }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->payment_type }}</td>
                                <td>{{ $row->blnc_trans }}</td>
                                <td>${{ $row->shipping }}</td>
                                <td>${{ $row->vat }}</td>
                                <td>${{ $row->subtotal }}</td>
                                <td>${{ $row->total }}.00</td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 3px;">Pending</span>
                                    @elseif($row->status == 1)
                                        <span class="badge badge bg-teal" style="font-size: 13px; color: white; padding: 3px;">Order Accepted</span>
                                    @elseif($row->status == 2)
                                        <span class="badge badge bg-orange" style="font-size: 13px; color: white; padding: 3px;">Delivery In Progress</span>
                                    @elseif($row->status == 3)
                                        <span class="badge badge-success" style="font-size: 13px; color: white; padding: 3px;">Order Delivered</span>
                                    @else
                                        <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 3px;">Order Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('admin/order/view/'.$row->id) }}" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-eye mg-r-10"></i>View</a>
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



