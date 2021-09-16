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
            'program_name' => "Swim With Dolphins",
            'program_cost' => 10000,
            'capacity' => 30,
            'excursion_date' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
        [
            'program_name' => "ICE Fishing",
            'program_cost' => 9000,
            'capacity' => 10,
            'excursion_date' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
        [
            'program_name' => "Deep Sea Diving",
            'program_cost' => 8000,
            'capacity' => 40,
            'excursion_date' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ]
    ];

    public function run()
    {
        foreach ($this->program as $program) {
            Program::create($program);
        }
    }
}
