<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'paid',
    ];

    public function products() {
        return $this->belongsToMany('App\Product', 'order_products', 'order_id', 'product_id')
            ->using('App\OrderProducts');
    }
}
