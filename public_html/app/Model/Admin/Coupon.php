<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'coupon','discount',
    ];
}
