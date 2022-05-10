<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use PDF;

class PdfController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pdfView($id){
        $invoice_data = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.phone','users.email')
            ->where('orders.id',$id)
            ->first();

        $shipping_data = DB::table('shipping')->where('order_id',$id)->first();

        $order_details = DB::table('orders_details')
            ->join('products','orders_details.product_id','products.id')
            ->select('orders_details.*','products.product_code','products.image_one')
            ->where('orders_details.order_id',$id)
            ->get();
        return view('pdf_download',compact('invoice_data','order_details','shipping_data'));
    }

    public function pdfDownload($id){
        $invoice_data = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.phone','users.email')
            ->where('orders.id',$id)
            ->first();

        $shipping_data = DB::table('shipping')->where('order_id',$id)->first();

        $order_details = DB::table('orders_details')
            ->join('products','orders_details.product_id','products.id')
            ->select('orders_details.*','products.product_code','products.image_one')
            ->where('orders_details.order_id',$id)
            ->get();
        $pdf = PDF::loadView('pdf_download',compact('invoice_data','order_details','shipping_data'));
        return $pdf->download('invoice.pdf');
    }


}
