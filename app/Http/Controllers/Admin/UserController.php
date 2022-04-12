<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class UserController extends Controller
{
  public function user_list(){

    $users=User::all();
   
 return view('admin.pages.users.index', compact('users'));


  }
  public function user_create(){
    $roles=  Role::all();
 return view('admin.pages.users.create', compact('roles'));

  }
  public function user_store(Request $request){

User::create([
'name'=>$request->user_name,
'role_id'=>$request->role_id,
'email'=>$request->email,
'password'=>$request->password,
'image'=>$request->image

]);

  }
}
