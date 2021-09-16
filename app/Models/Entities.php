<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    use HasFactory;

    protected $primaryKey = "entity_id";
    protected $table = "entities";

    public function guest(){
        return $this->belongsTo(Guest::class,);
    }

    public function tour_company(){
        return $this->belongsTo(Tour_Company::class);
    }
}
