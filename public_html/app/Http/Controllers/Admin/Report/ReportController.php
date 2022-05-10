<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function todayOrder(){

        $today = date('d-m-y');
        $order = DB::table('orders')->where('status',0)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }

    public function todayAccept(){

        $today = date('d-m-y');
        $order = DB::table('orders')->where('status',1)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }

    public function todayDeliveryStart(){

        $today = date('d-m-y');
        $order = DB::table('orders')->where('status',2)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }
    public function todayDeliveryComplete(){

        $today = date('d-m-y');
        $order = DB::table('orders')->where('status',3)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }
    public function todayReject(){

        $today = date('d-m-y');
        $order = DB::table('orders')->where('status',4)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }
    public function searchReport(){

        return view('admin.report.search_report');
    }

    public function searchByYear(Request $request){

        $year = $request->year;
        $total = DB::table('orders')->where('status',3)->where('year',$year)->sum('total');
        $count = DB::table('orders')->where('status',3)->where('year',$year)->count('id');
        $order = DB::table('orders')->where('year',$year)->get();
        return view('admin.report.search_year',compact('order','total','year','count'));
    }

    public function searchByMonth(Request $request){

        $month = $request->month;
        $year = $request->year;
        $total = DB::table('orders')->where('status',3)->where('year',$year)->where('month',$month)->sum('total');
        $count = DB::table('orders')->where('status',3)->where('year',$year)->where('month',$month)->count('id');
        $order = DB::table('orders')->where('year',$year)->where('month',$month)->get();
        return view('admin.report.search_month',compact('order','total','year','count','month'));
    }

    public function searchByDate(Request $request){

        $date = $request->date;
        $new_date =date('d-m-y',strtotime($date));
        $total = DB::table('orders')->where('status',3)->where('date',$new_date)->sum('total');
        $count = DB::table('orders')->where('status',3)->where('date',$new_date)->count('id');
        $order = DB::table('orders')->where('date',$new_date)->get();
        return view('admin.report.search_date',compact('order','total','count','date'));
    }
}
