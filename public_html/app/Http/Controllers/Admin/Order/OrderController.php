<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function allOrder(){

        $order = DB::table('orders')->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function newOrder(){

        $order = DB::table('orders')->where('status',0)->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function acceptedOrder(){
        $order = DB::table('orders')->where('status',1)->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function deliveryOrder(){
        $order = DB::table('orders')->where('status',2)->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function completedOrder(){
        $order = DB::table('orders')->where('status',3)->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function rejectedOrder(){
        $order = DB::table('orders')->where('status',4)->get();
        return view('admin.order.new_order',compact('order'));
    }

    public function viewOrder($id){

        $order = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.phone','users.email')
            ->where('orders.id',$id)
            ->first();

        $shipping = DB::table('shipping')->where('order_id',$id)->first();

        $order_details = DB::table('orders_details')
                        ->join('products','orders_details.product_id','products.id')
                        ->select('orders_details.*','products.product_code','products.filename')
                        ->where('orders_details.order_id',$id)
                        ->get();
        return view('admin.order.view_order',compact('order','shipping','order_details'));
    }

    public function acceptOrderPayment($id){

        DB::table('orders')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Order Payment Accepted!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function proceedOrderDelivery($id){

        $product = DB::table('orders_details')->where('order_id',$id)->get();
        foreach ($product as $row) {
            DB::table('products')
                ->where('id',$row->product_id)
                ->update(['product_quantity' => DB::raw('product_quantity-'.$row->quantity)]);
        }
        DB::table('orders')->where('id',$id)->update(['status'=>2]);
        $notification=array(
            'messege'=>'Delivery Process Started!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function completeOrderDelivery($id){

        DB::table('orders')->where('id',$id)->update(['status'=>3]);
        $notification=array(
            'messege'=>'Product Delivery Completed!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function cancelOrderPayment($id){

        DB::table('orders')->where('id',$id)->update(['status'=>4]);
        $notification=array(
            'messege'=>'Order Rejected!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


}
