<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class Hotelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $hotel = [
        [
            'hotel_name' => 'Bahia Principle',
        ],
        [
            'hotel_name' => 'Frenchmans Cove Resort',
        ],
        [
            'hotel_name' => 'Golden Clouds',
        ],
        [
            'hotel_name' => 'Goldeneye Hotel Resort',
        ],
        [
            'hotel_name' => 'Hedonism Resorts',
        ],
        [
            'hotel_name' => 'Jamaica Pegasus Hotel',
        ],
        [
            'hotel_name' => 'Round Hill Hotel',
        ],
        [
            'hotel_name' => 'Strawberry Hill',
        ],
        [
            'hotel_name' => 'R Hotel Kingston',
        ],
        [
            'hotel_name' => 'Terra Nova All Suite Hotel',
        ],
        [
            'hotel_name' => 'Four Seasons',
        ],
        [
            'hotel_name' => 'Eden Gardens Wellness Resort & Spa',
        ],
        [
            'hotel_name' => 'Spanish Court Hotel',
        ],
        [
            'hotel_name' => 'Courtleigh Hotel and Suites',
        ],
        [
            'hotel_name' => 'Knutsford Court Hotel',
        ],
        [
            'hotel_name' => 'Courtyard Hotel',
        ],
        [
            'hotel_name' => 'Hyatt Zilara Rose Hall',
        ],
        [
            'hotel_name' => 'Sandals South Coast',
        ],
        [
            'hotel_name' => 'Breathless Montego Bay Resort & Spa',
        ],
        [
            'hotel_name' => 'Jewel Grande Montego Bay Resort & Spa',
        ],
    ];


    public function run()
    {
        foreach ($this->hotel as $hotel) {
            Hotel::create($hotel);
        }
    }
}
