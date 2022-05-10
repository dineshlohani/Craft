<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $setting = DB::table('settings')->first();
        return view('pages.contact',compact('setting'));
    }

    public function storeMessage(Request $request){

        $data = array();
        $data['name'] = $request->email;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        DB::table('contacts')->insert($data);
        $notification=array(
            'messege'=>'Thanks for Messaging Us!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function wholeSeller(){
        $wholesale_info = DB::table('wholesales')->first();
        return view('pages.wholeseller',compact('wholesale_info'));
    }
}
