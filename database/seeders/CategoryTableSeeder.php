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
            'nama' => 'Makanan'
        ]);
        category::create([
            'nama' => 'Minuman'
        ]);
        category::create([
            'nama' => 'Kendaraan'
        ]);
        category::create([
            'nama' => 'Alat Masak'
        ]);
        
    }
}
