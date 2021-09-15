<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_info extends Model
{
    use HasFactory;

    public function tour_company() {
        $this->belongsTo(Tour_Company::class);
    }
}
