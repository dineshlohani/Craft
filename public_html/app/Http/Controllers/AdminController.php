<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function UserChart(){
         $chart_options = [
             'chart_title' => 'Users by months',
             'report_type' => 'group_by_date',
             'model' => 'App\Visitor',
             'group_by_field' => 'created_at',
             'group_by_period' => 'day',
             'chart_type' => 'bar',
         ];
         $chart1 = new LaravelChart($chart_options);
         return $chart1;
     }

    public function orderChart(){
        $chart_options = [
            'chart_title' => 'Orders chart',
            'report_type' => 'group_by_date',
            'model' => 'App\Order',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',

            'chart_type' => 'line',

        ];
        $chart2 = new LaravelChart($chart_options);
        return $chart2;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = date('d-m-y');
        $month = date('F');
        $year = date('Y');
        $today_order = DB::table('orders')->where('date',$date)->sum('total');
        $month_order = DB::table('orders')->where('month',$month)->sum('total');
        $year_order = DB::table('orders')->where('year',$year)->sum('total');
        $total_newOrder = DB::table('orders')->where('date',$date)->where('status',0)->get();
        $total_completeOrder = DB::table('orders')->where('date',$date)->where('status',3)->get();
        $total_cancelOrder = DB::table('orders')->where('date',$date)->where('status',4)->get();
        $total_deliveryOrder = DB::table('orders')->where('date',$date)->where('status',2)->get();
        $return_orderSum = DB::table('orders')->where('return_order',2)->sum('total');
        $return_todayOrderSum = DB::table('orders')->where('date',$date)->where('return_order',2)->sum('total');
        $return_orderCount = DB::table('orders')->where('return_order',2)->get();
        $product = DB::table('products')->get();
        $user = DB::table('users')->get();
        $visitor_count = DB::table('visitors')->distinct('ip_address')->count('id');
        $visitors = DB::table('visitors')->groupBy('created_at');
//        dd($visitor_count);
        //Chart Code
        $chart1= $this->UserChart();
        $chart2= $this->orderChart();

        return view('admin.home')->with(compact('today_order','month_order','year_order','total_newOrder','product','user','total_completeOrder','total_cancelOrder','total_deliveryOrder','return_orderSum','return_orderCount','return_todayOrderSum','chart1','chart2'));
    }



    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification);
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logged Out !',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.login')->with($notification);
    }

}
