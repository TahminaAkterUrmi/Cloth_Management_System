<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
    public function facebookRedirect(){

 return Socialite::driver('facebook')->redirect();

    }
    public function loginWithfacebook(){

try {

    $user = Socialite::driver('facebook')->user();
    $isUser = User::where('facebook_id', $user->id)->first();

    if($isUser){
        Auth::login($isUser);
        return redirect()->route('admin');
        
    }else{

 $createUser= User::create([
 'name'=>$user->name,
 'email'=>$user->email,
 'role_id'=>1,
 'facebook_id'=>$user->id,
 'password'=>bcrypt('123456')
 ]);
 Auth::login($createUser);
 return redirect()->route('admin');


    }
} catch(Throwable $exception){
 dd($exception->getMessage());

}


    }
    public function githubRedirect(){

  return Socialite::driver('github')->redirect();


    }
    public function loginWithgithub(){

     try {

            $user = Socialite::driver('github')->user();
            $isUser = User::where('github_id', $user->id)->first();
        
            if($isUser){
                Auth::login($isUser);
                return redirect()->route('admin');
                
            }else{
        
         $createUser= User::create([
         'name'=>$user->name,
         'email'=>$user->email,
         'role_id'=>1,
         'github_id'=>$user->id,
         'password'=>bcrypt('123456')
         ]);
         Auth::login($createUser);
         return redirect()->route('admin');
        
        
            }
        } catch(Throwable $exception){
         dd($exception->getMessage());
        
        }

    }
//     public function password_forget(){

//         return view('admin.pages.reset_password.forget_password');
//      }
//      public function forgetPasswordEmailPost(Request $request){
//           $request->validate([
//           'email'=>'required|exists:users'
//           ]);
        
//               $token = Str::random(50);
//               $user = User::where('email', $request->email)->first();
//               $user->update([
//             'reset_token'=>$token,
//             'reset_token_expire_at'=>Carbon::now()->addMinute(3),
//               ]);
//               $link = route('admin.reset.password',$token);

//           }

// public function resetpassword($token){

     
// }

     }

