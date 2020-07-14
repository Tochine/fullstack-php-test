<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'code', 'user_id', 'value', 'valid' 
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
