<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Stephan de Vries', 
                'username' => 'stephan', 
                'email' => 'stephan-v@gmail.com', 
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Khairul M Nasir', 
                'username' => 'nasir', 
                'email' => 'nasir@gmail.com', 
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Ucup Bin Maun', 
                'username' => 'ucup', 
                'email' => 'ucup@gmail.com', 
                'password' => bcrypt('12345')
            ]
        ];
        DB::table('users')->insert($users);
    }
}
