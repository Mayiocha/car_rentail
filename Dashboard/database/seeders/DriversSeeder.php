<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//CONEXIONs
use App\Models\Drive;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("drivers")->insert([
            'user_id'=> 1,
            'license_number'=>'2121',
            'license_img'=>'sese.jpg',

            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new Drive();
        $dato1 -> user_id = 2;
        $dato1 -> license_number = '2020';
        $dato1 -> license_img = 'default.jpg';
        $dato1 -> save();
    }
}
