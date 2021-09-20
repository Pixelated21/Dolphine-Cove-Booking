<?php

namespace Database\Seeders;

use App\Models\Payment_Type;
use Illuminate\Database\Seeder;

class paymentType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $payment_type = [
        [
            'payment_type' => 'Credit'
        ],
        [
            'payment_type' => 'Cash'
        ]
    ];

    public function run()
    {
        foreach ($this->payment_type as $payment_type) {
            Payment_Type::create($payment_type);
        }
    }
}
