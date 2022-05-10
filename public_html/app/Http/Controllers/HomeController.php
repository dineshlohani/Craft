<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->get();
        $return_order = DB::table('orders')->where('user_id',Auth::id())->where('status',3)->orderBy('id','DESC')->get();
        return view('home',compact('order','return_order'));
    }

    public function orderTrack(Request $request)
    {
        $code = $request->code;
        $track =  DB::table('orders')->where('status_code',$code)->first();
        if ($track){
            return view('pages.tracking.order_track',compact('track'));
        }else{
            $notification=array(
                'messege'=>'Invalid Status Code!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

        //return view('home',compact('order'));
    }

    public function viewUserOrder($id){

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
        return view('pages.order.view_order',compact('order','shipping','order_details'));
    }

    public function cancelUserOrder($id){

        DB::table('orders')->where('id',$id)->update(['status'=>4]);
        $notification = array(
            'messege' => 'Order Cancelled Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function returnRequestOrder($id){

        DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
        $notification = array(
            'messege' => 'Return Order Requested Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function updatePassword(Request $request)
    {
        $password = Auth::user()->password;
        $oldpass = $request->oldpass;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification = array(
                    'messege' => 'Password Changed Successfully! Please Login with Your New Password',
                    'alert-type' => 'success'
                );
                return Redirect()->route('login')->with($notification);
            } else {
                $notification = array(
                    'messege' => 'New password and Confirm Password not matched!',
                    'alert-type' => 'error'
                );
                return Redirect()->back()->with($notification);
            }
        } else {
            $notification = array(
                'messege' => 'Old Password not matched!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Logout()
    {
        // $logout= Auth::logout();
        Auth::logout();
        $notification = array(
            'messege' => 'You have been logged out successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->route('login')->with($notification);


    }
}
