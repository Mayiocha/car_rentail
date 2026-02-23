<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Loyalt;

class LoyaltsLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("loyaltys")->insert([
            'name'=> 'Papas',
            'main_points'=>1,
            'discount_percentage'=>15,
            'free_extra_hours'=>1,

            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new Loyalt();
        $dato1 -> name = "Orlando";
        $dato1 -> main_points = 1;
        $dato1 -> discount_percentage = 10;
        $dato1 -> free_extra_hours = 2;
        $dato1 -> save();
    }
}
