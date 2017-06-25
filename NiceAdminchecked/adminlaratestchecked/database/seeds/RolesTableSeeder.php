<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
   
    public function run()
    {
         Role::insert([
        	['name'=>'Admin'],
        	['name'=>'ReceptionList'],
        	['name'=>'Manager'],
        	['name'=>'CEO']
        	]);
       
    }
}
