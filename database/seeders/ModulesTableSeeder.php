<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User 
        $check_users = Module::firstOrCreate([
            'name'=>'Users',
            'status'=> 'active'

        ]);
        //user- permission
        $permissions=['users.index','users.create','users.store'];
        foreach ($permissions as $permission){
   Permission::firstOrCreate([
'module_id'=>$check_users->id,
'name'=>$permission,
'slug'=>Str::slug($permission)

]);

        }
        //category
        $category = Module::firstOrCreate([

        'name'=>'Category',


        ]);
        //category-permission
        $category_permissions = ['category.list','category.create','category.store','category.edit','category.update','category.delete'];
        foreach ($category_permissions as $permission)
        {
         Permission::firstOrCreate([
           'module_id' =>$category->id,
           'name'=>$permission,
           'slug'=>Str::slug($permission)

         ]);
        }
        //Role
        $role = Module::firstOrCreate([
            'name'=>'Role',
            'status'=>'active'

        ]);
        //role-permission

        $role_permissions = ['roles.list','role.create','role.store','role.edit','role.update','role.delete'];
        foreach($role_permissions as $permission){
            Permission::firstOrCreate([
             'module_id'=>$role->id,
             'name'=>$permission,
             'slug'=>Str::slug($permission)
            ]);
        }


    }
}
