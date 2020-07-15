<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $subTotalPrice = 0;
    //public $storedItem;


    public function addItem($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->subTotalPrice += $item->price;
    }

    // public function product()
    // {
    //     return $this->belongsToMany(Product::class, 'product_id');
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
