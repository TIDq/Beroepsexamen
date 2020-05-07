<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price'
    ];
    /**
     * The attributes that are guarded from changes.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    public function orders() {
        return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id')
            ->using('App\OrderProducts');
    }
}
