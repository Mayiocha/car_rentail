<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("payments")->insert([
            'rentail_id'=> 1,
            'amount'=> 4,
            'payment_method'=> 'credit',
            'transition_id'=>1,
            
            'status'=> 'pending',

            'payment_date'=>date('Y-m-d h:m:s'),
            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new Payment();
        $dato1 -> rentail_id = 2;
        $dato1 -> amount = 1;
        $dato1 -> payment_method = 'credit';
        $dato1 -> transition_id = 2;
        $dato1 -> status = 'pending';
        $dato1 -> payment_date = date('Y-m-d h:m:s');
        $dato1 -> save();
    }
}
