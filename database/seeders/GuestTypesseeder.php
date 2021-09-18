<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest_Type;

class GuestTypesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $guest_type = [
        [
            'guest_type' => 'Walk-In'
        ],
        [
            'guest_type' => 'TourCompany'
        ]
    ];
    
    public function run()
    {
        foreach ($this->guest_type as $guest_type) {
            Guest_Type::create($guest_type);
        }
    }
}
