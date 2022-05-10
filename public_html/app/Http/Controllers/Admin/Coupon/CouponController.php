<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Model\Admin\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Coupon(){
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.coupon',compact('coupon'));
    }

    public function storecoupon(Request $request){

        $validateData = $request->validate([
            'coupon' => 'required|unique:coupons|max:255',
            'discount' => 'required',
        ]);

        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->insert($data);
        $notification=array(
            'messege'=>'Coupon Added Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function deletecoupon($id){
        DB::table('coupons')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Coupon Deleted Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function updatecoupon(Request $request){


        $coupon = Coupon::findorFail($request->coupon_id);
        $coupon->update($request->all());
        //Toaster Part
        $notification=array(
            'messege'=>'Coupon Edited Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
