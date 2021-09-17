<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public $primaryKey = "hotel_id";
    public $table = "hotels";

    public $timestamps = false;

    public function guest() {
        return $this->hasMany(Guest::class);
    }
}
