<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Canvas\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=>Str::uuid(),
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=>1,
            'username'=>'admin',
        ]);
    }
}
