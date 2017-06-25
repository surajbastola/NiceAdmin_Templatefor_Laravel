<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
  
    public function run()
    {
          User::create([
            'role_id'=>1,
            'active'=>1,
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'remember_token'=>str_random(10),
            ]);
    }
}
