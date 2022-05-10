<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function returnOrder(){

        $order = DB::table('orders')->where('return_order',1)->get();
        return view('admin.returnOrder.return_order',compact('order'));
    }

    public function approveReturnOrder($id){
        DB::table('orders')->where('id',$id)->update(['return_order'=>2]);
        $notification = array(
            'messege' => 'Return Order Approved Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function returnOrderComplete(){
        $order = DB::table('orders')->where('return_order',2)->get();
        return view('admin.returnOrder.return_order',compact('order'));
    }
}
