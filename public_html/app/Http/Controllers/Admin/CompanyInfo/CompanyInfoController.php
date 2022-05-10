<?php

namespace App\Http\Controllers\Admin\CompanyInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function policies(){

        $policy = DB::table('policies')->get();
        return view('admin.policy.policies',compact('policy'));

    }

    public function storePolicy(Request $request){

        $data = array();
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $policy = DB::table('policies')->insert($data);
        $notification=array(
            'messege'=>'Policy Addded Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deletePolicy($id){

        $policy = DB::table('policies')->where('id',$id)->delete();
        //Toaster Part
        $notification=array(
            'messege'=>'Policy Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function editPolicy($id){
        $policy = DB::table('policies')->where('id',$id)->first();
        return view('admin.policy.edit_policy',compact('policy'));
    }

    public function updatePolicy(Request $request,$id){


        $data = array();
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;

        $policy = DB::table('policies')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Policy Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin.policies')->with($notification);
    }



    public function faqs(){
        $faq = DB::table('faqs')->get();
        return view('admin.policy.faqs',compact('faq'));
    }

    public function storeFaq(Request $request){

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $faq = DB::table('faqs')->insert($data);
        $notification=array(
            'messege'=>'FAQ Addded Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deleteFaq($id){

        $faq = DB::table('faqs')->where('id',$id)->delete();
        //Toaster Part
        $notification=array(
            'messege'=>'FAQ Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function editFaq($id){
        $faq = DB::table('faqs')->where('id',$id)->first();
        return view('admin.policy.edit_faq',compact('faq'));
    }

    public function updateFaq(Request $request,$id){


        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $faq = DB::table('faqs')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'FAQ Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin.faqs')->with($notification);
    }
}
