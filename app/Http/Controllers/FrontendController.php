<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class FrontendController extends Controller
{
     public function index()
    {
    	return view('welcome')->with('products',Product::orderBY('created_at','desc')->paginate(3));
    }

    public function single($id)
    {
    	$pros=Product::find($id);
    	return view('frontend_design.singlepage')->with('pros',$pros);
    }
   
}
