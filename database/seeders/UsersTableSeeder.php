<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
           ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('123456'),'created_at' => now(), 'updated_at' => now()],
           ['name' => 'erik', 'email' => 'erik@pobox.com', 'password' => bcrypt('123456'),'created_at' => now(), 'updated_at' => now()],
           ['name' => 'paprik', 'email' => 'paprik@protonmail.com', 'password' => bcrypt('123456'),'created_at' => now(), 'updated_at' => now()],


       ]);
    }
}
