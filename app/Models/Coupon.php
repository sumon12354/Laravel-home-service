<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
     protected $table ='coupons';
     protected $primaryKey ='id';
    protected $fillable = [
        'COUPON',
        'DISCOUNT',
        'START_DATE',
        'DESCRIPTION',
        'SERVICE',
        'DISCOUNT_TYPE',
        'EXPIRE_DATE',
    ];

}
