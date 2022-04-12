<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login(){
    return view('admin.login');

    }
    public function do_login(Request $request){

        $userInfo= $request->except('_token');
        // dd($userInfo);
        
       if (Auth::attempt($userInfo)){
       
return redirect()->route('admin');

       }
return redirect()->back();


    }
    public function logout(){


        Auth::logout();
        return redirect()->route('admin.login');
    }
}
