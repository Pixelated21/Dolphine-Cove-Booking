<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Activity extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_activity_id";
    protected $table = "payment_activity";

    public function payment_info(){
        return $this->belongsTo(Payment_info::class);
    }
}
