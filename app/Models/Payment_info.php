<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_info extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_info_id";
    protected $table = "payment_info";

    public function tour_company() {
        return $this->belongsTo(Tour_Company::class,);
    }
    public function guest(){
        return $this->belongsTo(Guest::class);
    }

    public function payment_activity(){
        return $this->hasOne(Payment_Activity::class,"payment_info_id","payment_info_id");
    }
}
