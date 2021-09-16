<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $booking = [
        [
            'booking_id' => 1,
            'guest_id' => 1,
            'tour_company_id' => 1,
            'programme_id' => 1,
            'booking_type' => "walk-in",
            'payment_type' => "cash",
            'date_booked' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
        [
            'booking_id' => 2,
            'guest_id' => 2,
            'tour_company_id' => 2,
            'programme_id' => 2,
            'booking_type' => "online",
            'payment_type' => "credit",
            'date_booked' => "2021-09-16 08:18:13",
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ]
    ];

    public function run()
    {
        foreach ($this->booking as $bookings) {
            Booking::create($bookings);
        }
    }
}
