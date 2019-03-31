<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Session;

class CartController extends Controller
{
    public function add()
    {
    //dd(request()->all());
      Cart::add([
      	'id' => request()->prod_id, 
      	'name' => request()->prod_name, 
      	'qty' => request()->qty, 
      	'price' =>request()->prod_price,
      ])->associate('App\Product'); //we can access models by using associate(i want the image in this case)
     // dd(Cart::content());
      Session::flash('info','Item is on cart now!');
      return redirect()->route('cart.items');
      //dont have to send the contents.
      //carts holds the same data in every page.

    }


     public function items() //this is added to displaying all the cart items
    {
    	//dd(request()->all());
      //Cart::destroy();
    	return view('frontend_design.cart');
    }

     public function remove($rowId) //this is added to displaying all the cart items
    {
       Cart::remove($rowId);
       Session::flash('success','Item removed from the cart!');
       return redirect()->back();
    }


    public function inc($qntt,$rid)
    {

       Cart::update($rid,$qntt+1);
        return redirect()->back();
    }

    public function dec($qntt,$rid)
    {
    	Cart::update($rid,$qntt-1);
    	 return redirect()->back();
    }

    public function checkout()
    {
    	 return view('frontend_design.checkout');
    }


    public function discount()
    {
       if(!request()->cupon_code=="sondip")
       {
           Session::flash('warning','হুদাই চেষ্টা করতাস মিয়াঁ');
           return redirect()->back();
       }
       else
       {
         Session::flash('success','কুপন পাইছো তাইলে মিয়াঁ');
         Session::flash('success','যাও দিলাম ১০% ছাড়!');
         return view('frontend_design.discount');
       }
      
    }


}
