<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function check(){
        $content = Cart::content();
        return response()->json($content);
    }

    public function showCart(){

        $cart = Cart::content();
        return view('pages.cart', compact('cart'));

    }

    public function removeCart($rowId){

        Cart::remove($rowId);
        return \Response::json(['success' => 'Product Removed From Your Cart!']);

    }

    public function updateCart(Request $request,$rowId){

        $qty = $request->qty;
        $prod_id = $request->prod_id;
        $product = DB::table('products')->where('id',$prod_id)->first();
        if ($product->product_quantity >=$qty){
            Cart::update($rowId,$qty);
            return \Response::json(['success' => 'Product Quantity Updated!']);
        }else{
            return \Response::json(['error' => 'Sorry! Product limit exceeded!']);
        }

    }

    public function quickView($id){

        $product = DB::table('products')
            ->leftJoin('categories','products.category_id','categories.id')
            ->leftJoin('subcategories','products.subcategory_id','subcategories.id')
            ->select('products.*','categories.category_name','subcategories.subcategory_name')
            ->where('products.id',$id)
            ->first();

        $color = $product->product_color;
        $product_color = explode(',', $color);

        $size = $product->product_size;
        $product_size = explode(',', $size);

        $material = $product->product_material;
        $product_material = explode(',', $material);

        return response::json(array(

            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,
            'material' => $product_material,
        ));

    }

    public function checkOut(){

        if (Auth::check()){

            $cart = Cart::content();
            return view('pages.checkout', compact('cart'));

        }else{
            $notification=array(
                'messege'=>'Please Login to your Account!',
                'alert-type'=>'error'
            );
            return Redirect()->route('login')->with($notification);
        }

    }

    public function applyCoupon(Request $request){
        $coupon = $request->coupon;
        $get_coupon = DB::table('coupons')->where('coupon',$coupon)->first();
        if ($get_coupon){
            Session::put('coupon',[
               'name' => $get_coupon->coupon,
               'discount' => $get_coupon->discount,
                'new_total' => Cart::Subtotal()-$get_coupon->discount
            ]);
            $notification=array(
                'messege'=>'Coupon Successfully Applied!',
                'alert-type'=>'success'
            );
            //Session::flush();
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Invalid Coupon Applied!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function removeCoupon(){
        Session::forget('coupon');
        //echo "test";
        $notification=array(
            'messege'=>'Coupon Removed Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

}
