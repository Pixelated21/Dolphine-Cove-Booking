<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $program = [
        [
            'programme_name' => "Swim With Dolphins",
            'programme_cost' => 10000,
            'capacity' => 30,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],
        [
            'programme_name' => "ICE Fishing",
            'programme_cost' => 9000,
            'capacity' => 10,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],
        [
            'programme_name' => "Deep Sea Diving",
            'programme_cost' => 8000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],[
            'programme_name' => "Central Park",
            'programme_cost' => 2000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],[
            'programme_name' => "Horse Riding",
            'programme_cost' => 3500,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],[
            'programme_name' => "Boat Riding",
            'programme_cost' => 5000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],[
            'programme_name' => "Jet Ski Riding",
            'programme_cost' => 6500,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],[
            'programme_name' => "Falls Climbing",
            'programme_cost' => 8000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],
        [
            'programme_name' => "Beach",
            'programme_cost' => 8000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13",
        ],
    ];

    public function run()
    {
        foreach ($this->program as $program) {
            Program::create($program);
        }
    }
}
