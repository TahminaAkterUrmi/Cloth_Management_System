<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role=Role::create([

         'name'=>'admin',

      ]);
      User::create([
        'role_id'=>$role->id,
     'name'=>'Urmi',
      'email'=>'admin@gmail.com',
       'password'=>bcrypt('12345'),
    
      
       

      ]);
    }
}
