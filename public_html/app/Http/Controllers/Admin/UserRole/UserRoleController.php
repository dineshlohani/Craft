<?php

namespace App\Http\Controllers\Admin\UserRole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function viewUserRole(){
        $user = DB::table('admins')->where('type',2)->get();
        return view('admin.user_role.viewuser_role',compact('user'));
    }

    public function userRoleCreate(){

        return view('admin.user_role.createuser_role');

    }

    public function userRoleStore(Request $request){

        $validateData = $request->validate([
            'email' => 'required|unique:admins'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['category'] = $request->category;
        $data['product'] = $request->product;
        $data['orders'] = $request->orders;
        $data['report'] = $request->report;
        $data['users'] = $request->users;
        $data['return_order'] = $request->return_order;
        $data['product_review'] = $request->product_review;
        $data['coupon'] = $request->coupon;
        $data['newsletter'] = $request->newsletter;
        $data['seo_setting'] = $request->seo_setting;
        $data['site_setting'] = $request->site_setting;
        $data['type'] = 2;

        DB::table('admins')->insert($data);
        $notification=array(
            'messege'=>'Admin Created Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function userRoleDelete($id){

        DB::table('admins')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Admin Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function userRoleEdit($id){

        $user = DB::table('admins')->where('id',$id)->first();
        return view('admin.user_role.edituser_role',compact('user'));
    }

    public function userRoleUpdate(Request $request){

        $id = $request->id;

        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;

        $data['category'] = $request->category;
        $data['product'] = $request->product;
        $data['orders'] = $request->orders;
        $data['report'] = $request->report;
        $data['users'] = $request->users;
        $data['return_order'] = $request->return_order;
        $data['product_review'] = $request->product_review;
        $data['coupon'] = $request->coupon;
        $data['newsletter'] = $request->newsletter;
        $data['seo_setting'] = $request->seo_setting;
        $data['site_setting'] = $request->site_setting;


        DB::table('admins')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Admin Updated Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

}
