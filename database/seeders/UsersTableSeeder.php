<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            //Admin
            [
                'name' =>'Admin',
                'username' =>'Admin',
                'email' =>'admin@gmail.com',
                'password' =>Hash::make('admin'),
                'role' =>'admin',
                'status' =>'active'
            ],
            //Vendor
            [
                'name' =>'Tudor Vendor',
                'username' =>'tudvendor',
                'email' =>'tudor@yahoo.com',
                'password' =>Hash::make('tudor'),
                'role' =>'vendor',
                'status' =>'active'
            ],
            //User
            [
                'name' =>'Tudor User',
                'username' =>'tudoruser',
                'email' =>'tudoruser@gmail.com',
                'password' =>Hash::make('tudoruser'),
                'role' =>'user',
                'status' =>'active'
            ]
        ]);
    }
}
