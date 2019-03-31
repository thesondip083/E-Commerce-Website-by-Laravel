<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Session;

class PaymentController extends Controller
{
    public function pay()
    {
    	//dd(request()->all());

    	// Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		Stripe::setApiKey("sk_test_90I3mVm1yuva7dD5rmFoJk1s00EDimCrb6");

		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token =request()->stripeToken;

		$charge =Charge::create([
		    'amount' =>Cart::total()*100 ,
		    'currency' => 'usd',
		    'description' => 'jinis kinar Charge',
		    'source' => $token,
            ]);

		Session::flash('success','Success!Your payment is done!');
		Cart::destroy();
		return redirect()->route('index');
    }
}
