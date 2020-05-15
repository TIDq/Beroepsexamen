<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProducts extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id'
    ];

    protected $table = 'order_products';
}
