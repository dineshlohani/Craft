<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public function StoreNewsletter(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:newsletters|max:55',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('newsletters')->insert($data);
        $notification=array(
            'messege'=>'Thanks for Subscribing Us! You will receive updates straight to your inbox.',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
