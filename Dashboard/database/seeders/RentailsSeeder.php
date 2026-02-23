<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rentail;

class RentailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rentails")->insert([
            'user_id'=> 1,
            'car_id'=> 1,
            'drive_id'=> 1,
            'pickup_date'=>date('Y-m-d h:m:s'),
            'return_date'=>date('Y-m-d h:m:s'),
            'total_amount'=> 1,
            'status'=> 'confirmed',

            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new Rentail();
        $dato1 -> user_id = 1;
        $dato1 -> car_id = 1;
        $dato1 -> drive_id = 1;
        $dato1 -> pickup_date = date('Y-m-d h:m:s');
        $dato1 -> return_date = date('Y-m-d h:m:s');
        $dato1 -> total_amount = 1;
        $dato1 -> status = 'confirmed';
        $dato1 -> save();
    }
}
