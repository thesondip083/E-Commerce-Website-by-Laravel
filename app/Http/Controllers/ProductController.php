<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
//Sessions stores information about the user across the request.
//so when we use Session::flash and a show a notification we actually
//say if the request have a information about success or info flash 
//messages according to the notification setup.

class ProductController extends Controller
{
    public function index()
    {
    	return view('products.allproduct')->with('products',Product::all());
    }
    
    public function create()
    {
    	return view('products.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'name'=>'required',
            'image'=>'required|image',
            'price'=>'required',
            'description'=>'required',
            'country'=>'required'
    	]);

        $img=$request->image;
        $new_name=time().$img->getClientOriginalName();
        $img->move('uploads/images',$new_name);
        // $feature->move('uploads/posts',$feature_newname);

    	Product::create([
              'name'=>$request->name,
              'avatar'=>'/uploads/images/'.$new_name,
		      'price'=>$request->price,
		      'description'=>$request->description,
		      'country'=>$request->country
    	]);

    	Session::flash('success','Successfully Added a New Product');
    	return redirect()->route('product.index');
    }

     public function edit($id)
    {
        $pro=Product::find($id);
        return view('products.update')->with('prod',$pro);
    }


      public function update($id,Request $request)
    {
        $p=Product::find($id);
        if($request->hasFile('image'))
        {
            $img=request()->image;
            $img_new_name=time().$img->getClientOriginalName();
            $img->move('uploads/images',$img_new_name);
            $p->avatar='/uploads/images/'.$img_new_name;
            $p->save();
        }

        $p->name=request()->name;
        $p->price=request()->price;
        $p->country=request()->country;
        $p->description=request()->description;
        $p->save();
        Session::flash('success',"Successfully updated");
        return redirect()->route('product.index');
        
    }

    public function destroy($id)
    {
       $pr=Product::find($id); //finding the product
       if(file_exists($pr->avatar)) //if file is in the stored folder
       {
        unlink($pr->avatar); //delete it
       }

       $pr->delete();
       Session::flash('success',"Successfully Deleted");
       return redirect()->route('product.index');
    }


}
