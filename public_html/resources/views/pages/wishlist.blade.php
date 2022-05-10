@extends('layouts.app')

@section('title', 'My Wishlist-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')

    <div id="reloadWish">

        @if($wish_product->isEmpty())
            <div class="section section-padding text-center">
                <p>Your Wishlist is Empty !</p>
                <a class="btn btn-primary2 btn-hover-dark mr-3 mb-3" href="{{url('all/products')}}">Continue Shopping</a>
            </div>

        @else
        <!-- Wishlist Section Start -->
            <div class="section section-padding">
                <div class="container">
                    <form class="cart-form" action="#">
                        <table class="cart-wishlist-table table">
                            <thead>
                            <tr>
                                <th class="name" colspan="2">Product</th>
                                <th class="price">Unit Price</th>
                                <th class="add-to-cart">&nbsp;</th>
                                <th class="remove">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($wish_product as $row)
                            <tr>
                                <td class="thumbnail"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ URL::to('public/media/product/'.json_decode($row->filename, true)[0]) }}"></a></td>
                                <td class="name"> <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"></a>{{ $row->product_name }}</td>
                                @if($row->discount_price == NULL)
                                <td class="price"><span>$ {{ $row->selling_price }}</span></td>
                                @else
                                <td class="price"><span>$ {{ $row->discount_price }}</span></td>
                                @endif
                                <td class="add-to-cart"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}" class="btn btn-light btn-hover-dark"><i class="fal fa-eye mr-2"></i>View Product</a></td>
                                <td class="remove"><a href="#" class="btn">×</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col text-center mb-n3">
                                <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="{{url('all/products')}}">Continue Shopping</a>
                                <a class="btn btn-dark btn-outline-hover-dark mb-3" href="{{ route('show.cart') }}">View Cart</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Wishlist Section End -->
        @endif

    </div>

@endsection
