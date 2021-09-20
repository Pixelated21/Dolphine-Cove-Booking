<?php

namespace Database\Seeders;

use App\Models\Entities;
use Illuminate\Database\Seeder;

class EntityTypesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $entity = [
        [
            'entity_type' => 'Guest'
        ],
        [
            'entity_type' => 'TourCompany'
        ]
    ];

    public function run()
    {
        foreach ($this->entity as $entity) {
            Entities::create($entity);
        }
    }
}
