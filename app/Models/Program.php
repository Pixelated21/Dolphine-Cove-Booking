<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $primaryKey = "programme_id";
    protected $table = "programs";

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
