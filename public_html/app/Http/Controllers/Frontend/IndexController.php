<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

        $category = DB::table('categories')->get();
        $banner = DB::table('banners')->get();
        $fcategory = DB::table('categories')->where('show_index', '=', 1)->get();
        $bestselling = DB::table('products')->where('status',1)->where('best_selling',1)->orderBy('id','desc')->limit(5)->get();
        $newarrival = DB::table('products')->where('status',1)->where('new_arrival',1)->orderBy('id','desc')->limit(5)->get();
        $dealweek = DB::table('products')->where('status',1)->where('deal_week',1)->orderBy('id','desc')->get();


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
        $visitor_track = DB::table('visitors')->where('ip_address',$geoIpInfo->ip)->whereDate('created_at',Carbon::today())->doesntExist();
        if ($visitor_track){
            DB::table('visitors')->insert($data);
        }


        return view('pages.index',compact('banner','bestselling','newarrival','category','fcategory','dealweek'));


    }

}
