<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function guest() {
        return $this->hasMany(Guest::class);
    }
}
