<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_Company extends Model
{
    use HasFactory;

    protected $table = "tour_companies";
    protected $primaryKey = "tour_company_id";

    protected $fillable =
        ['credit_amt'];

    public function payment_info(){
        return $this->hasMany(Payment_info::class);
    }
}
