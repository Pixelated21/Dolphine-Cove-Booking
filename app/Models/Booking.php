<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function guest(){
        return $this->belongsTo(Guest::class);
    }

    public function tour_company() {
        $this->belongsTo(Tour_Company::class);
    }

    public function program() {
        $this->belongsTo(Program::class);
    }
}
