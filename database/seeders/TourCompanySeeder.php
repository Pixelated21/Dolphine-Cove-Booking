<?php

namespace Database\Seeders;

use App\Models\Tour_Company;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TourCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $tour = [
        [
            'company_name' => "Juta Tours",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
        [
            'company_name' => "Knutsford Express",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
        [
            'company_name' => "Zihmi Tours",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ]
    ];

    public function run()
    {
        foreach ($this->tour as $tours) {
            Tour_Company::create($tours);
        }
    }
}
