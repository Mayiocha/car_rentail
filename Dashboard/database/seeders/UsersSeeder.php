<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name'=> 'Administrador',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456'),
            'img'=>'default.jpg',
            'loyalty_points'=>'sasa',
            'loyalty_level_id'=>1,

            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato1 = new User();
        $dato1 -> name = 'Pepito';
        $dato1 -> email = 'user@gmail.com';
        $dato1 -> password = Hash::make('123456');
        $dato1 -> img = 'sisis.jpg';
        $dato1 -> loyalty_points = 'sisis.jpg';
        $dato1 -> loyalty_level_id = 1;

        $dato1 -> save(); 
    }
}
