<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Role;
use App\Models\RolePermission;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list_role(){
        $roles= Role::with('permissions')->get();
       
    //  dd($roles);
        return view('admin.pages.roles.index', compact('roles'));
    }
    public function create_role(){

     return view('admin.pages.roles.create');

    }
    public function store_role(Request $request){
       Role::create([

         'name'=>$request->role_name

       ]);
       Toastr::success('Role Created Successfully', 'success');
       return redirect()->back();



    }
    public function edit_role($role_id){
$role= Role::find($role_id);
$roles= Role::select('id', 'name')->orderBy('id', 'desc')->get();
return view('admin.pages.roles.edit', compact('role','roles'));


    }

    public function update_role(Request $request, $role_id){
        $roles= Role::all();
        Role::where('id', $role_id)->update([

            'name'=>$request->name
        ]);

return redirect()->back()->with('success','Updated Roles Successfully');

    }
    public function delete_role($role_id){
Role::find($role_id)->delete();
return redirect()->back()->with('success','Role Deleted.');


    }
    public function assignForm($role_id){
     $roles=Role::find($role_id);
$modules = Module::with('permissions')->get();
return view('admin.pages.roles.assign_permission',compact('modules', 'role_id'));

    }
    public function assignStore(Request $request){
 
foreach ($request->permissions as $permission){
 RolePermission::create([
 'role_id'=>$request->role_id,
 'permission_id'=>$permission,

 ]);

}
return redirect()->route('roles.list');
    }
}
