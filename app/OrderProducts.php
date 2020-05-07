<?php

namespace App;

use Illuminate\Database\Eloquent\Pivot;

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
}
