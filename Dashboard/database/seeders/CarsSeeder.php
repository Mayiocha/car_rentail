<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//CONEXIONs
use App\Models\Car;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cars")->insert([
            'model'=>'Tacoma',
            'year'=>2001,
            'color'=>'azul',
            'license_plate'=>'00000',
            'mileage'=>1200,
            'lat'=>1,
            'lng'=>1,
            'is_premiun'=>1,
            'rentail_count'=>1,
            'daily_rate'=>1,
            'status'=>'avaible',

            'brand_id'=>1,
            
            
            'created_at'=>date('Y-m-d h:m:s')
        ]);

        DB::table("cars")->insert([
            'model'=>'Tundra',
            'year'=>2001,
            'color'=>'azul',
            'license_plate'=>'00002',
            'mileage'=>1200,
            'lat'=>1,
            'lng'=>1,
            'is_premiun'=>1,
            'rentail_count'=>1,
            'daily_rate'=>1,
            'status'=>'avaible',

            'brand_id'=>1,
            
            
            'created_at'=>date('Y-m-d h:m:s')
        ]);

        $dato1 = new Car();
        $dato1 -> model = 'F-150';
        $dato1 -> year = 2019;
        $dato1 -> color = 'verde';
        $dato1 -> license_plate = '00001';
        $dato1 -> mileage = 1222;
        $dato1 -> lat = 1;
        $dato1 -> lng = 1;
        $dato1 -> is_premiun = 1;
        $dato1 -> rentail_count = 1;
        $dato1 -> daily_rate = 1;
        $dato1 -> status = 'avaible';
        $dato1 -> brand_id = 1;
        $dato1 -> save();
    }
}
