<?php

namespace App\Http\Controllers\Admin\Category;

use App\Model\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){

        $category = Category::all();
        return view('admin.category.category',compact('category'));

    }

    public function storecategory(Request $request){

        $validateData = $request->validate([
           'category_name' => 'required|unique:categories|max:255',
            'category_image' => 'required',
        ]);

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['show_index'] = $request->show_index;
        $image = $request->file('category_image');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/category/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($image)->resize(525,280)->save($upload_path.$image_full_name);

            $data['category_image'] = $image_url;
            $category = DB::table('categories')->insert($data);
            $notification=array(
                'messege'=>'Category Added Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $category = DB::table('categories')->insert($data);
            $notification=array(
                'messege'=>'Category Addded Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function deletecategory($id){
        $data = DB::table('categories')->where('id',$id)->first();
        $image = $data->category_image;
        unlink($image);
        $category = DB::table('categories')->where('id',$id)->delete();
        //Toaster Part
        $notification=array(
            'messege'=>'Category Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Editcategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));

    }

    public function updatecategory(Request $request,$id){


        $oldimage = $request->old_image;
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['show_index'] = $request->show_index;
        $image = $request->file('category_image');
        if ($image) {
            //unlink($oldimage);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/category/';
            $image_url = $upload_path.$image_full_name;
            \Intervention\Image\Facades\Image::make($image)->resize(525,280)->save($upload_path.$image_full_name);

            $data['category_image'] = $image_url;
            $category = DB::table('categories')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Category Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('categories')->with($notification);
        }else{
            $category = DB::table('categories')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Category Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('categories')->with($notification);
        }

    }
}
