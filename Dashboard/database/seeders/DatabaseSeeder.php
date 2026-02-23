<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BrandsSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(LoyaltsLevelsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(RentailsSeeder::class);
        $this->call(PaymentsSeeder::class);
        
    }
}
