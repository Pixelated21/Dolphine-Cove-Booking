<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    use HasFactory;

    public function guest(){
        return $this->belongsTo(Guest::class);
    }

    public function tour_company() {
        return $this->belongsTo(Tour_Company::class);
    }

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
