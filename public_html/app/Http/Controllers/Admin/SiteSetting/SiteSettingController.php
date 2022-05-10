<?php

namespace App\Http\Controllers\Admin\SiteSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function siteSetting(){
        $setting = DB::table('settings')->first();
        return view('admin.site-setting.view_sitesetting',compact('setting'));
    }

    public function siteUpdate(Request $request){

        $id = $request->id;

        $data = array();
        $data['vat'] = $request->vat;
        $data['shipping_charge'] = $request->shipping_charge;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['phone1'] = $request->phone1;
        $data['address'] = $request->address;
        $data['fb_link'] = $request->fb_link;
        $data['insta_link'] = $request->insta_link;
        $data['ytube_link'] = $request->ytube_link;
        $data['twitter_link'] = $request->twitter_link;
        DB::table('settings')->where('id',$id)->Update($data);
        $notification=array(
            'messege'=>'Site Setting Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }
}
