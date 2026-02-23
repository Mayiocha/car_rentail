<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//CONEXION
use App\Models\BrandModel;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("brands")->insert([
            'name'=> 'Papas',
            'img'=>'default.jgp',
            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new BrandModel();
        $dato1 -> name = "Erick";
        $dato1 -> img = "default.jpg";
        $dato1 -> save();

       

    }
}
