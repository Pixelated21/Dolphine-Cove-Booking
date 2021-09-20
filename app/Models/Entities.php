<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $primaryKey = "entity_type_id";
    protected $table = "entity_types";

    public function guest(){
        return $this->belongsTo(Guest::class,);
    }

    public function tour_company(){
        return $this->belongsTo(Tour_Company::class);
    }
}
