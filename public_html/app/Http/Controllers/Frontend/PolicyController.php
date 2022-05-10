<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolicyController extends Controller
{

    public function policies(){
        $policy_info = DB::table('policies')->get();
        return view('pages.policies',compact('policy_info'));
    }

    public function faq(){
        $faq_info = DB::table('faqs')->get();
        return view('pages.faq',compact('faq_info'));
    }
}
