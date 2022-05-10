<?php

namespace App\Http\Controllers\Admin\Newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Newsletter(){
        $sub = DB::table('newsletters')->get();
        return view('admin.newsletter.newsletter',compact('sub'));
    }

    public function DeleteSub($id){
        DB::table('newsletters')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Subscriber Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
