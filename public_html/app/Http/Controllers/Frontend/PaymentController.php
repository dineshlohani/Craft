<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use function Psy\sh;

class PaymentController extends Controller
{
    public function paymentPage(){

        $cart = Cart::Content();
        return view('pages.payment',compact('cart'));
    }

    public function paymentProcess(Request $request){

        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['country'] = $request->country;
        $data['address'] = $request->address;
        $data['apartment'] = $request->apartment;
        $data['city'] = $request->city;
        $data['zip_code'] = $request->zip_code;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['order_note'] = $request->order_note;
        $data['payment'] = $request->payment;
        //dd($data);
        if($request->payment == 'stripe'){

            $cart = Cart::Content();
            return view('pages.payment.stripe',compact('data','cart'));

        }elseif ($request->payment == 'paypal'){

        }else{
            echo "Cash On Delivery";
        }

    }

    public function paymentStripe(Request $request){

        $total = $request->total;

        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51I4KZjFOqsTuqs07z8Y1lsdHRiztLlL89xbqUzJoJ09aWJsFtfAQju0Or5aBPwnQfETDLOGaj3292zo6eVe8Y43R00BDWqnG1u');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $total * 100,
                'currency' => 'usd',
                'description' => 'Nerdware Ecommerce',
                'source' => $token,
                'metadata' => ['order_id' => uniqid()],
            ]);

            $data = array();
            $data['user_id'] = Auth::id();
            $data['order_code'] = Str::random(6);;;
            $data['payment_id'] = $charge->payment_method;
            $data['payment_type'] = $request->payment_type;
            $data['payment_amount'] = $charge->amount;
            $data['blnc_trans'] = $charge->balance_transaction;
            $data['stripe_order_id'] = $charge->metadata->order_id;
            $data['subtotal'] = Cart::subtotal();
            $data['shipping'] = $request->shipping;
            $data['vat'] = $request->vat;
            $data['total'] = $request->total;
            $data['status'] = 0;
            $data['status_code'] = Str::random(5);;
            $data['date'] = date('d-m-y');
            $data['month'] = date('F');
            $data['year'] = date('Y');

            $order_id = DB::table('orders')->insertGetId($data);

            //Send Mail to User For Invoice
            $email_user = Auth::user()->email;
            Mail::to($email_user)->send(new InvoiceMail($data));

            //Inserting Into Shipping Table

            $shipping = array();
            $shipping['order_id'] = $order_id;
            $shipping['ship_name'] = $request->ship_name;
            $shipping['ship_country'] = $request->ship_country;
            $shipping['ship_address'] = $request->ship_address;
            $shipping['ship_apartment'] = $request->ship_apartment;
            $shipping['ship_city'] = $request->ship_city;
            $shipping['zip_code'] = $request->zip_code;
            $shipping['ship_email'] = $request->ship_email;
            $shipping['ship_phone'] = $request->ship_phone;
            $shipping['order_note'] = $request->order_note;
            DB::table('shipping')->insert($shipping);

            //Inserting Into Order-Details Table

            $content = Cart::content();
            $details = array();
            foreach ($content as $row) {
                $details['order_id'] = $order_id;
                $details['product_id'] = $row->id;
                $details['product_name'] = $row->name;
                $details['color'] = $row->options->color;
                $details['size'] = $row->options->size;
                $details['quantity'] = $row->qty;
                $details['single_price'] = $row->price;
                $details['total_price'] = $row->qty * $row->price;
                DB::table('orders_details')->insert($details);
            }
            if ($charge) {
                Cart::destroy();
                if (Session::has('coupon')) {
                    Session::forget('coupon');
                }
                $notification = array(
                    'messege' => 'Thank you for ordering. We received your order and will begin processing it soon!',
                    'alert-type' => 'success'
                );
                return Redirect()->to('/')->with($notification);
            }
        }catch (\Stripe\Exception\CardException $e){
//             Since it's a decline, \Stripe\Exception\CardException will be caught
            echo 'Status is:' . $e->getHttpStatus() . '\n';
            echo 'Type is:' . $e->getError()->type . '\n';
            echo 'Code is:' . $e->getError()->code . '\n';
            // param is '' in this case
            echo 'Param is:' . $e->getError()->param . '\n';
            echo 'Message is:' . $e->getError()->message . '\n';
//            $notification = array(
//                'messege' => $e->getError()->message,
//                'alert-type' => 'error'
//            );
            //return redirect()->route('payment.process');
        }

    }

}
