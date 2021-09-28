<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [ 'name' => 'admin',
            'email' =>'admin@admin.com',
            'email_verified_at' => now(),
            'password' =>Hash::make('admin'),
            'role_id'=>1
            ],
           [ 'name' => 'user',
            'email' =>'user@user.com',
            'email_verified_at' => now(),
            'password' =>Hash::make('user'),
            'role_id'=>2 
            ],
        ]);
    }
}
