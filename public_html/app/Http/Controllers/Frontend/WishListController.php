<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishListController extends Controller
{
    public function addWishList($id){

        $userid = Auth::id();
        $check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();
        $pass = DB::table('products')->find($id);
        $data = array(
            'user_id' => $userid,
            'product_id' => $id,
        );
        if(Auth::Check()){

            if ($check){
                return \Response::json(['error' => 'Product Already Added to Your Wishlist!']);

            }else{
                DB::table('wishlists')->insert($data);
                return \Response::json(['success' => 'Product Added To Your Wishlist!']);
            }

        }else{
            return \Response::json(['error' => 'Please Login Your Account!']);
        }

    }

    public function showWishlist(){

        $userid = Auth::id();
        $wish_product = DB::table('wishlists')->join('products','wishlists.product_id','products.id')
        ->select('products.*','wishlists.user_id')
        ->where('wishlists.user_id',$userid)
        ->get();
        //return response()->json($wish_product);
        return view('pages.wishlist', compact('wish_product'));

    }
}
