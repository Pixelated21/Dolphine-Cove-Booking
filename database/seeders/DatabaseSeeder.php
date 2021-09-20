<?php

namespace Database\Seeders;

use App\Models\Entities;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProgramSeeder::class,
            TourCompanySeeder::class,
            Hotelseeder::class,
            paymentType::class,
            GuestTypesseeder::class,
            Entities::class,
        ]);
    }
}
