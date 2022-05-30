<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'nama' => 'Nike'
        ]);
        category::create([
            'nama' => 'Adidas'
        ]);
        category::create([
            'nama' => 'Celcius'
        ]);
        
    }
}
