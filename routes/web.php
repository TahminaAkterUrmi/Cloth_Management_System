<?php

use App\Http\Controllers\admin\CategoriesController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClothController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login


 

Route::get('/admin/login',[LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/doLogin',[LoginController::class,'do_login'])->name('admin.dologin');
Route::get('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');


// admin
 Route::group(['prefix'=>'admin','middleware'=> 'auth'], function(){

    Route::get('/', function () {
      //  return "ok";
        return view('admin.master');
     })->name('admin');
    

// categories
   Route::get('/category_list',[CategoriesController::class, 'list'])->name('category.list');
   Route::get('/category_create',[CategoriesController::class, 'create'])->name('category.create');
   Route::post('/category_store',[CategoriesController::class, 'store'])->name('category.store');
   Route::get('/category_edit/{category_id}',[CategoriesController::class, 'edit'])->name('category.edit');
   Route::post('/category_update/{category_id}',[CategoriesController::class, 'update'])->name('category.update');
   Route::get('/category_delete/{category_id}',[CategoriesController::class,'delete'])->name('category.delete');


 //cloth route end

//for seller
Route::get('/seller/list',[SellerController::class,'sellerlist'])->name('seller.list');
Route::get('/seller/create',[SellerController::class,'sellercreate'])->name('seller.create');
Route::post('/seller.store',[SellerController::class,'sellerstore'])->name('seller.store');
 


//for cloth
Route::get('/add/cloth',[ClothController::class,'addCloth'])->name('add.cloth');
Route::get('/cloth/list',[ClothController::class,'clothlist'])->name('cloth.list');
Route::post('/cloth/create',[ClothController::class,'clothCreate'])->name('cloth.list.create');
Route::get('/cloth/view/{cloth_id}',[ClothController::class,'viewCloth'])->name('cloth.view');
Route::get('/edit/cloth/{cloth_id}',[ClothController::class,'editCloth'])->name('cloth.edit');
Route::put('/update/cloth/{cloth_id}',[ClothController::class,'updateCloth'])->name('cloth.update');
Route::get('/delete/cloth/{cloth_id}',[ClothController::class,'deleteCloth'])->name('cloth.delete');
//roles
Route::get('/roles/list',[RoleController::class, 'list_role'])->name('roles.list');
Route::get('/roles/create',[RoleController::class, 'create_role'])->name('role.create');
Route::post('/roles/store',[RoleController::class, 'store_role'])->name('role.store');
Route::get('/roles/edit/{role_id}',[RoleController::class, 'edit_role'])->name('role.edit');
Route::post('/roles/update/{role_id}',[RoleController::class,'update_role'])->name('role.update');
Route::get('/roles/delete/{role_id}',[RoleController::class, 'delete_role'])->name('role.delete');

//assign role_permission

Route::get('/assign_permission/{role_id}', [RoleController::class, 'assignForm'])->name('permission.assign.form');
Route::post('/assign_permission/store',[RoleController::class, 'assignStore'])->name('assign.permission.store');


//users
Route::get('/users/list',[UserController::class,'user_list'])->name('users.index');
Route::get('/users/create',[UserController::class,'user_create'])->name('users.create');
Route::post('/users/store',[UserController::class,'user_store'])->name('users.store');
 
});