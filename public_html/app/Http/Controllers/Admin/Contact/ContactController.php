<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function contact(){
        $contact = DB::table('contacts')->get();
        return view('admin.contact.contact',compact('contact'));
    }

    public function wholeSale(){
        $wholesale = DB::table('wholesales')->first();
        return view('admin.wholesale.view_wholesale',compact('wholesale'));
    }

    public function wholeSaleEdit(){
        $wholesale = DB::table('wholesales')->first();
        return view('admin.wholesale.edit_wholesale',compact('wholesale'));
    }

    public function wholesaleUpdate(Request $request){
        $id = $request->id;

        $data = array();
        $data['desc'] = $request->desc;

        DB::table('wholesales')->where('id',$id)->Update($data);
        $notification=array(
            'messege'=>'Wholeseller Inforamtion Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
