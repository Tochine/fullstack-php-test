<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

        protected $fillable = [
            'name', 'price', 'unit', 'description', 'image'
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }

        public function priceFormat()
        {
            return \money_format('$%i', $this->price / 100);
        }
}
