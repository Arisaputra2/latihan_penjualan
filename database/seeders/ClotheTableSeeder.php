<?php

namespace Database\Seeders;

use App\Models\clothe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClotheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clothe::create([
            'nama' => ''
        ]);
    }
}
