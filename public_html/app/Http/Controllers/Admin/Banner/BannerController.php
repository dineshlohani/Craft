<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function banner(){

        $banner = DB::table('banners')->get();
        return view('admin.banner.banner',compact('banner'));

    }

    public function storeBanner(Request $request){

        $data = array();
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $image = $request->file('image');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/banner/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($image)->resize(1600,900)->save($upload_path.$image_full_name);

            $data['image'] = $image_url;
            $banner = DB::table('banners')->insert($data);
            $notification=array(
                'messege'=>'Banner Added Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $banner = DB::table('banners')->insert($data);
            $notification=array(
                'messege'=>'Banner Addded Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function deleteBanner($id){
        $data = DB::table('banners')->where('id',$id)->first();
        $image = $data->image;
        unlink($image);
        $banner = DB::table('banners')->where('id',$id)->delete();
        //Toaster Part
        $notification=array(
            'messege'=>'Banner Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function editBanner($id){
        $banner = DB::table('banners')->where('id',$id)->first();
        return view('admin.banner.edit_banner',compact('banner'));

    }

    public function updateBanner(Request $request,$id){


        $oldimage = $request->old_image;
        $data = array();
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $image = $request->file('image');
        if ($image) {
            unlink($oldimage);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/banner/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($image)->resize(1600,900)->save($upload_path.$image_full_name);

            $data['image'] = $image_url;
            $banner = DB::table('banners')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Banner Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('admin.banner')->with($notification);
        }else{
            $banner = DB::table('banners')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Banner Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('admin.banner')->with($notification);
        }

    }
}
