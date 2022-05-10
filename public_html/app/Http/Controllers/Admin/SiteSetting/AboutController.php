<?php

namespace App\Http\Controllers\Admin\SiteSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function about(){
        $about = DB::table('abouts')->first();
        return view('admin.site-setting.about',compact('about'));
    }
    public function aboutUpdate(Request $request){
        $id = $request->id;

        $data = array();
        $data['about_title'] = $request->about_title;
        $data['about_desc'] = $request->about_desc;
        $data['image_color'] = $request->image_color;
        $data['ship_info'] = $request->ship_info;
        $data['return_info'] = $request->return_info;
        $data['quality_info'] = $request->quality_info;
        $data['wrapping_info'] = $request->wrapping_info;
        $data['video_link'] = $request->video_link;
        $about_image = $request->file('about_image');
        $video_image = $request->file('video_link_image');

        if ($about_image) {
            //unlink($oldimage);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($about_image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/about/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($about_image)->resize(588,570)->save($upload_path.$image_full_name);
            $data['about_image'] = $image_url;
        }
        if ($video_image) {
            //unlink($oldimage);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($video_image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/about/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($video_image)->resize(1920,670)->save($upload_path.$image_full_name);
            $data['video_link_image'] = $image_url;
        }

        DB::table('abouts')->where('id',$id)->Update($data);
        $notification=array(
            'messege'=>'About Page Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
