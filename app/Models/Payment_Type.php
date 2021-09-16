<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Type extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_type_id";
    protected $table = "payment_types";

    public function guest() {
        return $this->belongsTo(Guest::class);
    }
}
