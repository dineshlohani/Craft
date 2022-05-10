<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productView($id,$product_name){

        $product = DB::table('products')->where('id',$id)->first();

        $geoIpInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $data = array();
        $data['ip_address'] = $geoIpInfo->ip;
        $data['iso_code'] = $geoIpInfo->iso_code;
        $data['country'] = $geoIpInfo->country;
        $data['city'] = $geoIpInfo->city;
        $data['state'] = $geoIpInfo->state;
        $data['state_name'] = $geoIpInfo->state_name;
        $data['postal_code'] = $geoIpInfo->postal_code;
        $data['time_zone'] = $geoIpInfo->timezone;
        $data['continent'] = $geoIpInfo->continent;
        $data['currency'] = $geoIpInfo->currency;
        $data['product_id'] = $product->id;
        $visitor_track = DB::table('visitors')->where('ip_address',$geoIpInfo->ip)->whereDate('created_at',Carbon::today())->where('product_id',$product->id)->doesntExist();
        if ($visitor_track){
            DB::table('visitors')->insert($data);
        }

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

        return view('pages.product_details',compact('product','product_color','product_size','product_material'));

    }

    public function AddCart(Request $request, $id){

        $product = DB::table('products')->where('id',$id)->first();
        $data = array();
        if ($product->product_quantity >=$request->qty){
            if ($product->discount_price == NULL){
                $data['id'] = $product->id;
                $data['name'] = $product->product_name;
                $data['qty'] = $request->qty;
                $data['price'] = $product->selling_price;
                $data['weight'] = 1;
                $data['options']['image'] = $product->filename;
                $data['options']['color'] = $request->color;
                $data['options']['size'] = $request->size;
                $data['options']['material'] = '';
                Cart::add($data);
                return \Response::json(['success' => 'Product Added To Your Cart!']);
            }else{
                $data['id'] = $product->id;
                $data['name'] = $product->product_name;
                $data['qty'] = $request->qty;
                $data['price'] = $product->discount_price;
                $data['weight'] = 1;
                $data['options']['image'] = $product->filename;
                $data['options']['color'] = $request->color;
                $data['options']['size'] = $request->size;
                $data['options']['material'] = '';
                Cart::add($data);
                return \Response::json(['success' => 'Product Added To Your Cart!']);
            }
        }else{
            return \Response::json(['error' => 'Product is out of Stock!']);
        }

    }

    public function subProductsView($id){

        $sub_products = DB::table('products')->where('subcategory_id',$id)->orderBy('id','desc')->paginate(12);
        $subcat_id = DB::table('products')->where('subcategory_id',$id)->first();
        $name = DB::table('subcategories')->where('id',$id)->first();
        $category_list = DB::table('categories')->get();

        //$geoIpInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);`
        $geoIpInfo = geoip()->getLocation('2400:1a00:b010:7743:15eb:58b3:ccde:4778');
        $data = array();
        $data['ip_address'] = $geoIpInfo->ip;
        $data['iso_code'] = $geoIpInfo->iso_code;
        $data['country'] = $geoIpInfo->country;
        $data['city'] = $geoIpInfo->city;
        $data['state'] = $geoIpInfo->state;
        $data['state_name'] = $geoIpInfo->state_name;
        $data['postal_code'] = $geoIpInfo->postal_code;
        $data['time_zone'] = $geoIpInfo->timezone;
        $data['continent'] = $geoIpInfo->continent;
        $data['currency'] = $geoIpInfo->currency;
        if ($subcat_id == NULL){
            return view('pages.subcat_products',compact('sub_products','category_list','name'));
        }else{
            $data['subcat_id'] = $subcat_id->id;
            $visitor_track = DB::table('visitors')->where('ip_address',$geoIpInfo->ip)->whereDate('created_at',Carbon::today())->where('subcat_id',$subcat_id->id)->doesntExist();
            if ($visitor_track){
                DB::table('visitors')->insert($data);
            }
            return view('pages.subcat_products',compact('sub_products','category_list','name'));
        }

    }

    public function catProductsView($id){

        $cat_products = DB::table('products')->where('category_id',$id)->orderBy('id','desc')->paginate(12);
        $cat_id = DB::table('products')->where('category_id',$id)->first();
        $name = DB::table('categories')->where('id',$id)->first();
        $category_list = DB::table('categories')->get();


        //$geoIpInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);`
        $geoIpInfo = geoip()->getLocation('2400:1a00:b010:7743:15eb:58b3:ccde:4778');
        $data = array();
        $data['ip_address'] = $geoIpInfo->ip;
        $data['iso_code'] = $geoIpInfo->iso_code;
        $data['country'] = $geoIpInfo->country;
        $data['city'] = $geoIpInfo->city;
        $data['state'] = $geoIpInfo->state;
        $data['state_name'] = $geoIpInfo->state_name;
        $data['postal_code'] = $geoIpInfo->postal_code;
        $data['time_zone'] = $geoIpInfo->timezone;
        $data['continent'] = $geoIpInfo->continent;
        $data['currency'] = $geoIpInfo->currency;
        if ($cat_id == NULL){
            return view('pages.cat_products',compact('cat_products','name','category_list'));
        }else{
            $data['category_id'] = $cat_id->id;
            $visitor_track = DB::table('visitors')->where('ip_address',$geoIpInfo->ip)->whereDate('created_at',Carbon::today())->where('category_id',$cat_id->id)->doesntExist();
            if ($visitor_track){
                DB::table('visitors')->insert($data);
            }
            return view('pages.cat_products',compact('cat_products','name','category_list'));
        }

    }

    public function allProductsView(){

        $all_products = DB::table('products')->orderBy('id','desc')->paginate(12);
        $category_list = DB::table('categories')->get();
        return view('pages.shop',compact('all_products','category_list'));
    }

    public function searchProductsView(Request $request){
        $item = $request->search;
        $category_list = DB::table('categories')->get();
        $search_products = DB::table('products')
            ->where('product_name','LIKE',"%$item%")->orderBy('id','desc')
            ->paginate(12);

        return view('pages.search',compact('search_products','item','category_list'));
    }
}
