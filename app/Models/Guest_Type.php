<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest_Type extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = "guest_type_id";
    protected $table = "guest_types";

    public function guest(){
        return $this->belongsTo(Guest::class);
    }
}
