<?php

namespace Database\Seeders;

use App\Models\Entities;
use Illuminate\Database\Seeder;

class EntityTypesseeder extends Seeder
{

    protected $container = [
        ["entity_type" => "Guest"],

        ["entity_type" => "Tour_Company"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->container as $container){
            Entities::create($container);
        }
    }
}
