<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function subcategories(){
        $category = DB::table('categories')->get();
        $subcat = DB::table('subcategories')
            ->leftJoin('categories','subcategories.category_id','categories.id')
            ->select('subcategories.*','categories.category_name')
            ->get();
        return view('admin.category.subcategory',compact('category','subcat'));
    }

    public function storesubcat(Request $request){

        $validateData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subcategories',
        ]);

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('subcategories')->insert($data);
        //Toaster Part
        $notification=array(
            'messege'=>'Sub-Category Added Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deletesubcat($id){
        DB::table('subcategories')->where('id',$id)->delete();
        //Toaster Part
        $notification=array(
            'messege'=>'Sub-Category Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function EditSubcat($id){

        $subcat = DB::table('subcategories')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        return view('admin.category.edit_subcat',compact('subcat','category'));

    }

    public function UpdateSubcat(Request $request, $id){

        $validateData = $request->validate([
            'subcategory_name' => 'required',
        ]);

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('subcategories')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Sub-Category Updated Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('sub.categories')->with($notification);

    }
}
