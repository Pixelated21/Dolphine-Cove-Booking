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
        ],[
            'company_name' => "Shorty Tours Transportation",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "Corporate Express",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "NATION-WIDE EXPRESS TOURS LTD",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "TRANSLUX TRANSPORTATION SERVICES",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "Jamaica Quest Tours & Travel Services",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "Galaxy Leisure and Tours Limited",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "Jamaica Eternal Tours and Transportation",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "M&M Fletcher's Transport",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],[
            'company_name' => "Jamaica Urban Transit Company",
            'credit_amt' => 0,
            'created_at' => "2021-09-16 08:18:13",
            'updated_at' => "2021-09-16 08:18:13"
        ],
    ];

    public function run()
    {
        foreach ($this->tour as $tours) {
            Tour_Company::create($tours);
        }
    }
}
