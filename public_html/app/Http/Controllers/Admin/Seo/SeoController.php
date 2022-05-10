<?php

namespace App\Http\Controllers\Admin\Seo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function seoSetting(){
        $seo = DB::table('seo')->first();
        return view('admin.seo.view_seo',compact('seo'));
    }

    public function seoUpdate(Request $request){

        $id = $request->id;

        $data = array();
        $data['meta_title'] = $request->meta_title;
        $data['meta_author'] = $request->meta_author;
        $data['meta_tag'] = $request->meta_tag;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['bing_analytics'] = $request->bing_analytics;
        DB::table('seo')->where('id',$id)->Update($data);
        $notification=array(
            'messege'=>'Seo Setting Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }
}
