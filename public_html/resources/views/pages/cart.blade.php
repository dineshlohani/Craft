@extends('layouts.app')

@section('title', 'My Cart-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')

<div id="reloadCart">

    @if($cart->isEmpty())
        <div class="section section-padding text-center">
            <p>Your Shopping Cart is Empty !</p>
            <a class="btn btn-primary2 btn-hover-dark mr-3 mb-3" href="{{url('all/products')}}">Continue Shopping</a>
        </div>

    @else
    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title2 mb-5">
                <div class="page-title">
                    <ul class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="{{ route(('show.cart')) }}">Cart</a></li>
                        <li class="breadcrumb-item">Apply Coupon</li>
                        <li class="breadcrumb-item">Payment Information</li>
                    </ul>
                </div>
            </div>
{{--            <form>--}}
                <table class="cart-wishlist-table table">
                    <thead>
                    <tr>
                        <th class="name" colspan="2">Product</th>
                        <th class="color">Color</th>
                        <th class="color">Size</th>
                        <th class="price">Price</th>
                        <th class="quantity">Quantity</th>
                        <th class="subtotal">Total</th>
                        <th class="remove">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $row)
                    <tr>
                        <td class="thumbnail"><a href="{{ url('product/details/'.$row->id.'/'.$row->name) }}"><img src="{{ URL::to('public/media/product/'.json_decode($row->options->image, true)[0]) }}"></a></td>
                        <td class="name"> <a href="{{ url('product/details/'.$row->id.'/'.$row->name) }}">{{ $row->name }}</a></td>
                        @if($row->options->color == NULL)
                        <td class="color"> <a href="">N/A</a></td>
                        @else
                        <td class="color"> <a href="">{{ $row->options->color }}</a></td>
                        @endif
                        @if($row->options->size == NULL)
                            <td class="color"> <a href="">N/A</a></td>
                        @else
                            <td class="color"> <a href="">{{ $row->options->size }}</a></td>
                        @endif
                        <td class="price"><span>${{ $row->price }}</span></td>
                            <td class="quantity text-right">
                                <div class="col-sm-6 align-items-center">
                                    <form id="ajaxupdCart{{$row->rowId}}">
                                        <div class="loop">
                                            <input type="number" name="qty{{$row->rowId}}" id="qty{{$row->rowId}}" value="{{ $row->qty }}">
                                            <input type="hidden" name="prod_id{{$row->rowId}}" id="prod_id{{$row->rowId}}" value="{{$row->id}}" />
                                        </div>
                                        <button class="btn-primary2 hintT-top updCart" id="updCart{{$row->rowId}}" data-hint="Update Quantity" data-id="{{ $row->rowId }}"><i class="fa fa-check-square"></i></button>
                                    </form>
                                </div>
                            </td>
                        <td class="subtotal"><span>$ {{ $row->price*$row->qty }}</span></td>
                        <td class="remove"><a data-id="{{ $row->rowId }}" class="btn delCart">×</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
{{--            </form>--}}
            <div class="cart-totals mt-5">
                <h2 class="title">Cart Totals</h2>
                <table>
                    <tbody>
                    <tr class="total">
                        <th>Total:</th>
                        <td><strong><span class="amount">${{ Cart::total() }}</span></strong></td>
                    </tr>
                    <tr class="subtotal">
                        <th>Shipping:</th>
                        <td><p>Shipping, taxes and discounts will be calculated at checkout.</p></td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route(('user.checkout')) }}" class="btn btn-dark btn-outline-hover-dark">Proceed to checkout</a>
            </div>
        </div>

    </div>
    <!-- Shopping Cart Section End -->
    @endif

</div>


    {{--Jquery CDN--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">

    $(document).on('click','.updCart',function (event) {
        event.preventDefault();
        var rowId = $(this).data('id');
        let prod_id = jQuery('#prod_id'+rowId).val();
        let qty = jQuery('#qty'+rowId).val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        if (rowId) {
            $.ajax({
                url: " {{ url('update/cart') }}/"+rowId,
                type:"POST",
                datType:"json",
                data:{
                    qty:qty,
                    prod_id:prod_id,
                    _token: _token
                },
                success:function(data){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })
                        $("#reloadCart").load(location.href + " #reloadCart");
                        $("#count_cart").load(location.href+" #count_cart>*","");
                        $("#count_cart1").load(location.href+" #count_cart1>*","");
                        $("#count_cart2").load(location.href+" #count_cart2>*","");
                        $("#count_cart3").load(location.href+" #count_cart3>*","");
                        $("#count_cart4").load(location.href+" #count_cart4>*","");
                        $("#offcanvas-cart").load(location.href+" #offcanvas-cart>*","");
                    }else{
                        Toast.fire({
                            icon: 'error',
                            title: data.error
                        })
                    }


                },
            });

        }else{
            alert('danger');
        }

    });
</script>

    <script type="text/javascript">

        $(document).on('click','.delCart',function (e) {
                e.preventDefault();
                var rowId = $(this).data('id');
                if (rowId) {
                    $.ajax({
                        url: " {{ url('remove/cart/') }}/"+rowId,
                        type:"GET",
                        datType:"json",
                        success:function(data){
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            if ($.isEmptyObject(data.error)) {
                                Toast.fire({
                                    icon: 'success',
                                    title: data.success,
                                })
                                $("#reloadCart").load(location.href + " #reloadCart");
                                $("#count_cart").load(location.href+" #count_cart>*","");
                                $("#count_cart1").load(location.href+" #count_cart1>*","");
                                $("#count_cart2").load(location.href+" #count_cart2>*","");
                                $("#count_cart3").load(location.href+" #count_cart3>*","");
                                $("#count_cart4").load(location.href+" #count_cart4>*","");
                                $("#offcanvas-cart").load(location.href+" #offcanvas-cart>*","");
                            }else{
                                Toast.fire({
                                    icon: 'error',
                                    title: data.error
                                })
                            }


                        },
                    });

                }else{
                    alert('danger');
                }
            //});

        });


    </script>

@endsection
