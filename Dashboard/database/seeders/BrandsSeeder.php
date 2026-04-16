<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("brands")->insert([
            'name' => 'Papas',
            'img' => 'default.jpg',
            'created_at' => now()
        ]);

        $dato1 = new Brand();
        $dato1->name = "Erick";
        $dato1->img = "default.jpg";
        $dato1->save();
    }
}