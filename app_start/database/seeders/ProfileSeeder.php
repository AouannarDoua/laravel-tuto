<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('profiles')->insert([
        'name' => 'Aouannar',
        'email' => Str::random(10) . "@gmail.com", 
        'password' =>'Hash::make(password)', //cryptage de password
        'bio' => Str::random(100),
       ]);
    }
}