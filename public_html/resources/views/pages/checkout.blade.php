@extends('layouts.app')

@section('title', 'Checkout-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')

@php
$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
@endphp

<!-- Shopping Cart Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title2 mb-5">
            <div class="page-title">
                <ul class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route(('show.cart')) }}">Cart</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route(('user.checkout')) }}">Apply Coupon</a></li>
                    <li class="breadcrumb-item">Payment Information</li>
                </ul>
            </div>
        </div>
        <div class="section-title2 text-center mb-4">
            <hr>
            <h2 class="title">Your order</h2>
            <hr>
        </div>
        <table class="cart-wishlist-table table">
            <thead>
            <tr>
                <th class="name" colspan="2">Product</th>
                <th class="color">Color</th>
                <th class="color">Size</th>
                <th class="price">Price</th>
                <th class="quantity">Quantity</th>
                <th class="subtotal">Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $row)
                <tr>
                    <td class="thumbnail"><a href="{{ url('product/details/'.$row->id.'/'.$row->name) }}"><img src="{{ URL::to('public/media/product/'.json_decode($row->options->image, true)[0]) }}"></a></td>
                    <td class="name"> <a href="{{ url('product/details/'.$row->id.'/'.$row->name) }}">{{ $row->name }}</a></td>
                    @if($row->options->color == NULL)
                        <td class="color">N/A</td>
                    @else
                        <td class="color">{{ $row->options->color }}</td>
                    @endif
                    @if($row->options->size == NULL)
                        <td class="color">N/A</td>
                    @else
                        <td class="color">{{ $row->options->size }}</td>
                    @endif
                    <td class="price"><span>${{ $row->price }}</span></td>
                    <td class="quantity"><span>{{ $row->qty }}</span></td>
                    <td class="subtotal"><span>${{ $row->price*$row->qty }}</span></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if(Session::has('coupon'))
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <p class="info-text">You have already applied coupon! Please proceed to next step.</p>
                </div>
            </div>
            <div class="cart-totals">
                <h2 class="title">Cart Totals</h2>
                <table>
                    <tbody>
                    <tr class="subtotal">
                        <th>SubTotal:</th>
                        <td><strong><span class="amount">${{ Cart::Subtotal() }}</p></span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Coupon :<br> <p style="font-size: 15px; color: forestgreen;">[{{ Session::get('coupon')['name'] }}]</p>
                        <a href="{{ route('coupon.remove') }}" class="btn btn-sm btn-primary">Remove</a>
                        </th>
                        <td><strong><span class="amount">${{ Session::get('coupon')['discount'] }}</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Shipping Charge:</th>
                        <td><strong><span class="amount">${{ $charge }}</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>VAT:</th>
                        <td><strong><span class="amount">{{ $vat }}%</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Total: </th>
                        <?php
                        $vat_amount = Cart::Subtotal()*$vat/100;
                        $f_price = Cart::Subtotal() - Session::get('coupon')['discount'] + $charge + $vat_amount;
                        ?>
                        <td><strong><span>${{ Cart::Subtotal() }} <p style="color: forestgreen;">+ {{$vat_amount}}(VAT Amount)</p><p style="color: darkred; margin-top: -10px;">- ${{ Session::get('coupon')['discount'] }}(Coupon)</p>
                                    <hr>
                                    <p style="font-size: 25px;">${{ $f_price }}</p></span></strong></td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route(('user.payment')) }}" class="btn btn-dark btn-outline-hover-dark">Proceed To Final Step</a>
            </div>
        @else
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <div class="cart-coupon">
                        <form method="POST" action="{{route('apply.coupon')}}">@csrf
                            <input type="text" name="coupon" placeholder="Enter your coupon code" required>
                            <button class="btn" type="submit">Apply <i class="fal fa-gift"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cart-totals">
                <h2 class="title">Cart Totals</h2>
                <table>
                    <tbody>
                    <tr class="subtotal">
                        <th>SubTotal:</th>
                        <td><strong><span class="amount">${{ Cart::Subtotal() }}</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Coupon</th>
                        <td><strong><span class="amount">N/A</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Shipping Charge:</th>
                        <td><strong><span class="amount">${{ $charge }}</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>VAT:</th>
                        <td><strong><span class="amount">{{ $vat }}%</span></strong></td>
                    </tr>
                    <tr class="total">
                        <th>Total: </th>
                        <?php
                        $vat_amount = Cart::Subtotal()*$vat/100;
                        $f_price = Cart::Subtotal() + $charge + $vat_amount;
                        ?>
                        <td><strong><span>${{ Cart::Subtotal() }} <p style="color: forestgreen; font-size: 15px;">+ {{$vat_amount}}(VAT Amount)</p>
                                    <hr>
                                    <p style="font-size: 25px;">${{ $f_price }}</p></span></strong></td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route(('user.payment')) }}" class="btn btn-dark btn-outline-hover-dark">Proceed To Final Step</a>
            </div>
        @endif
    </div>
</div>
<!-- Shopping Cart Section End -->

@endsection
