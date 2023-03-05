<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categori = [
            [
                'name' => 'Laravel', 
                'slug' => 'Belajar laravel'
            ],
            [
                'name' => 'Tailwind', 
                'slug' => 'Belajar Tailwind'
            ],
            [
                'name' => 'HTML', 
                'slug' => 'Belajar HTML'
            ],
            [
                'name' => 'PHP', 
                'slug' => 'Belajar PHP'
            ],
            [
                'name' => 'CSS', 
                'slug' => 'Belajar CSS'
            ],
            [
                'name' => 'Stephan de Vries', 
                'slug' => 'stephan'
            ]
        ];
        DB::table('categories')->insert($categori);
    }
}
