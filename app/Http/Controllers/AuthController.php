<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;
use Session;

class AuthController extends Controller
{
    public function auth($provider)
    {
       return SocialAuth::authorize($provider);
    }

    public function auth_callback($provider)
    {
       SocialAuth::login($provider,function($user,$details){

       	//dd($details);//details about user must check before accessing
        //dd($user); //instance of user initially empty

       // $img=$details->avatar;
       // $img_new_name=time().$img->getClientOriginalName();
        //$img->move('uploads/images',$img);

        $user->name=$details->full_name;
        $user->email=$details->email;
        $user->avatar=$details->avatar;
        $user->save();
       });
       
       Session::flash('info','Social Authentication Succeed!');
       return redirect('/home');
    }
}
