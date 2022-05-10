<?php

namespace App\Http\Controllers\Admin\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Stock(){
        $product = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->leftJoin('subcategories','products.subcategory_id','subcategories.id')
            ->select('products.*','categories.category_name','subcategories.subcategory_name')
            ->get();
        return view('admin.stock.stock',compact('product'));
    }

    public function updStock(Request $request){

        $prod_id = $request->update_id;
        $prod_quantity = $request->product_quantity;
        DB::table('products')->where('product_code',$prod_id)->update(['product_quantity'=>$prod_quantity]);
        $notification=array(
            'messege'=>'Product Quantity Updated !',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
