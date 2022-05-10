@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Orders</a>
            <span class="breadcrumb-item active">View Orders</span>
        </nav>

        <div class="sl-pagebody">
            <div class="col-lg-12 text-right">
            <a class="btn btn-success" href="{{url('pdf_download/'.$order->id)}}"><i class="fa fa-download mg-r-10"></i>Download Invoice</a>
            <a class="btn btn-primary" href="{{url('pdf_view/'.$order->id)}}" target="_blank"><i class="fa fa-eye mg-r-10"></i>View Invoice</a>
            </div>
            <div class="row row-sm mg-t-20">
                <div class="col-lg-6">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Order Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <table class="table table-hover table-bordered table-primary mg-b-0">
                                <tbody style="background-color: #5B93D3;">
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">NAME -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PHONE NUMBER -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->phone }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">EMAIL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">DATE (D-M-Y) -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->date }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">MONTH -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->month }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">YEAR -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->year }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SUB TOTAL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">${{ $order->subtotal }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">TOTAL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">${{ $order->total }}.00</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PAYMENT TYPE -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->payment_type }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">PAYMENT ID -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $order->payment_id }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->

                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Shipping Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <table class="table table-hover table-bordered table-primary mg-b-0">
                                <tbody style="background-color: #5B93D3;">
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">NAME -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING PHONE NUMBER -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_phone }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING EMAIL -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_email }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING COUNTRY -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_country }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING ADDRESS -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_address }}</td>
                                </tr>
                                @if($shipping->ship_apartment != NULL)
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">APARTMENT, SUITE, UNIT -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_apartment }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">APARTMENT, SUITE, UNIT -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">N/A</td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">SHIPPING TOWN/CITY -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->ship_city }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">POSTCODE/ZIPCODE -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">{{ $shipping->zip_code }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">STATUS -</td>
                                    <td style="font-size: 15px; color: white; text-align: center;">
                                        @if($order->status == 0)
                                            <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Pending</span>
                                        @elseif($order->status == 1)
                                            <span class="badge badge bg-teal" style="font-size: 13px; color: white; padding: 10px;">Order Payment Accepted</span>
                                        @elseif($order->status == 2)
                                            <span class="badge badge bg-orange" style="font-size: 13px; color: white; padding: 10px;">Delivery In Progress</span>
                                        @elseif($order->status == 3)
                                            <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Order Delivered</span>
                                        @else
                                            <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 10px;">Order Cancelled</span>
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-lg-12 mt-4">
                    <div class="card pd-20 pd-sm-40">
                        <h6 class="card-body-title">Product Details</h6>
                        <div class="table-responsive">
                            <hr>
                            <div class="table-wrapper">
                                    <table class="table table-hover table-bordered table-info">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">Product ID</th>
                                            <th class="wd-15p">Product Name</th>
                                            <th class="wd-15p">Image</th>
                                            <th class="wd-15p">Color</th>
                                            <th class="wd-15p">Size</th>
                                            <th class="wd-15p">Quantity</th>
                                            <th class="wd-15p">Unit Price</th>
                                            <th class="wd-20p">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_details as $row)
                                            <tr>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">{{ $row->product_code }}</td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">{{ $row->product_name }}</td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e; text-align: center;"> <img src="{{ URL::to('public/media/product/'.json_decode($row->filename, true)[0]) }}" height="100px;" width="100px;"> </td>
                                                @if($row->color == NULL)
                                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">N/A</td>
                                                @else
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">{{ $row->color }}</td>
                                                @endif
                                                @if($row->size == NULL)
                                                    <td style="font-size: 15px; color: white; background-color: #2b333e;">N/A</td>
                                                @else
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">{{ $row->size }}</td>
                                                @endif
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">{{ $row->quantity }}</td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">${{ $row->single_price }}</td>
                                                <td style="font-size: 15px; color: white; background-color: #2b333e;">${{ $row->total_price }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- table-wrapper -->
                        </div><!-- table-responsive -->
                        <div class="card bd-0 mb-2">
                            <div class="card-header card-header-default bg-info">
                                ORDER NOTES
                            </div><!-- card-header -->
                            <div class="card-body bd bd-t-0" style="background-color: #2b333e;">
                                @if($shipping->order_note != NULL)
                                    <p class="mg-b-0" style="font-size: 15px; color: white;">{{ $shipping->order_note }}</p>
                                @else
                                    <p class="mg-b-0" style="font-size: 15px; color: white;">N/A</p>
                                @endif
                            </div><!-- card-body -->
                        </div><!-- card -->
                        <div>
                            @if($order->status == 0)
                                <a href="{{url('admin/order/payment/accept/'.$order->id)}}" class="btn btn-info"><i class="fa fa-check"></i>  Accept Order</a>
                                <a href="{{url('admin/order/payment/cancel/'.$order->id)}}" class="btn btn-danger"><i class="fa fa-window-close"></i> Cancel Order</a>
                            @elseif($order->status == 1)
                                <a href="{{url('admin/order/delivery/proceed/'.$order->id)}}" class="btn btn-info">Proceed To Delivery</a>
                            @elseif($order->status == 2)
                                <a href="{{url('admin/order/delivery/completed/'.$order->id)}}" class="btn btn-success"><i class="fa fa-check"></i> Delivery Completed</a>
                            @elseif($order->status == 4)
                                <strong class="text-danger text-center"> This order is not valid.</strong>
                            @else
                                <strong class="text-success text-center">Products have been successfully delivered.</strong>
                            @endif
                        </div>
                    </div><!-- card -->
                </div><!-- col-6 -->
            </div><!-- row -->


        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
