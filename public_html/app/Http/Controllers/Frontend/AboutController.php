<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{

    public function index(){
        $about_info = DB::table('abouts')->first();
        return view('pages.about',compact('about_info'));
    }
}
