@extends('layouts.app')

@section('title', 'My Order Details-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')

    <!-- Order Details Section Start -->
    <div class="section section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="text-center mb-5 mt-2">
                <a href="{{ route('home') }}" class="btn btn-md btn-secondary"><i class="fas fa-backward"></i> Go Back</a>
                <a onClick="window.location.reload();" class="btn btn-md btn-secondary" style="color: white;"><i class="fas fa-sync"></i> Refresh</a>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-2 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <h2 class="title">My Order Details</h2>
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"> <b>Name:</b> {{ $order->name  }}</li>
                        <li class="list-group-item"> <b>Phone Number:</b> {{ $order->phone  }}</li>
                        <li class="list-group-item"> <b>Email:</b> {{ $order->email  }}</li>
                        <li class="list-group-item"> <b>DATE (D-M-Y):</b> {{ $order->date  }}</li>
                        <li class="list-group-item"> <b>Month:</b> {{ $order->month  }}</li>
                        <li class="list-group-item"> <b>Year:</b>  {{ $order->year  }}</li>
                        <li class="list-group-item"> <b>Sub Total:</b>  ${{ $order->subtotal  }}</li>
                        <li class="list-group-item"> <b>Shipping:</b>  ${{ $order->shipping  }}</li>
                        <li class="list-group-item"> <b>VAT:</b>  ${{ $order->vat  }}</li>
                        <li class="list-group-item"> <b>Total:</b>  ${{ $order->total  }}.00</li>
                        <li class="list-group-item"> <b>Payment ID:</b>  {{ $order->payment_id  }}</li>
                        <li class="list-group-item"> <b>Payment Type:</b>  {{ $order->payment_type  }}</li>
                    </ul>
                </div>

                <div class="col learts-mb-90">
                    <h2 class="title">Order Shipping Details</h2>
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"> <b>Shipping Name:</b> {{ $shipping->ship_name }}</li>
                        <li class="list-group-item"> <b>SHIPPING PHONE NUMBER:</b> {{ $shipping->ship_phone  }}</li>
                        <li class="list-group-item"> <b>Shipping Email:</b> {{ $shipping->ship_email  }}</li>
                        <li class="list-group-item"> <b>Shipping Country:</b> {{ $shipping->ship_country  }}</li>
                        <li class="list-group-item"> <b>Shipping Address:</b> {{ $shipping->ship_address  }}</li>
                        @if($shipping->ship_apartment != NULL)
                            <li class="list-group-item"> <b>APARTMENT, SUITE, UNIT:</b>{{ $shipping->ship_apartment }}</li>
                        @else
                            <li class="list-group-item"> <b>APARTMENT, SUITE, UNIT:</b>N/A</li>
                        @endif
                        <li class="list-group-item"> <b>SHIPPING TOWN/CITY:</b> {{ $shipping->ship_city  }}</li>
                        <li class="list-group-item"> <b>POSTCODE/ZIPCODE:</b> {{ $shipping->zip_code  }}</li>
                        <li class="list-group-item"> <b>Status:</b>
                            @if($order->status == 0)
                                <span class="badge badge-warning" style="font-size: 13px; color: white; padding: 10px;">Pending</span>
                            @elseif($order->status == 1)
                                <span class="badge badge-info" style="font-size: 13px; color: white; padding: 10px;">Order Payment Accepted</span>
                            @elseif($order->status == 2)
                                <span class="badge badge-primary" style="font-size: 13px; color: white; padding: 10px;">Delivery In Progress</span>
                            @elseif($order->status == 3)
                                <span class="badge badge-success" style="font-size: 13px; color: white; padding: 10px;">Order Delivered</span>
                            @else
                                <span class="badge badge-danger" style="font-size: 13px; color: white; padding: 10px;">Order Cancelled</span>
                            @endif
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Details Section End -->

    <!-- Order Products Details Section Start -->
    <div class="section section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Product Details</h2>
            </div>
            <!-- Section Title End -->
            <div class="row row-cols-md-1 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-90">
                    <table class="cart-wishlist-table table">
                        <thead>
                        <tr>
                            <th class="name" colspan="2">Product</th>
                            <th class="color">Color</th>
                            <th class="color">Size</th>
                            <th class="quantity">Quantity</th>
                            <th class="price">Unit Price</th>
                            <th class="subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order_details as $row)
                            <tr>
                                <td class="thumbnail"><a href=""><img src="{{ URL::to('public/media/product/'.json_decode($row->filename, true)[0]) }}"></a></td>
                                <td class="name"> <a href="">{{ $row->product_name }}</a></td>
                                @if($row->color == NULL)
                                    <td class="color"> <a href="">N/A</a></td>
                                @else
                                    <td class="color"> <a href="">{{ $row->color }}</a></td>
                                @endif
                                @if($row->size == NULL)
                                    <td class="color"> <a href="">N/A</a></td>
                                @else
                                    <td class="color"> <a href="">{{ $row->size }}</a></td>
                                @endif
                                <td class="color"><span>{{ $row->quantity }}</span></td>
                                <td class="price"><span>${{ $row->single_price }}.00</span></td>
                                <td class="subtotal"><span>$ {{ $row->total_price }}.00</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Products Details Section End -->

@endsection
