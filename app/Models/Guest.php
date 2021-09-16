<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $primaryKey = "guest_id";
    protected $table = "guests";

    public function booking(){
        return $this->hasMany(Booking::class,"guest_id","guest_id");
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function payment_info(){
        return $this->hasMany(Payment_info::class,"entity_id","guest_id");
    }

    public function guest_type(){
        return $this->hasOne(Guest_Type::class);
    }

}
