<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    public function booking(){
        return $this->hasMany(Booking::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

}
