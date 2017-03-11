<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
<<<<<<< HEAD
=======

    public function goods()
    {
        return $this->belongsToMany('App\Order','orders_to_goods','good_id','order_id');
    }
>>>>>>> bb3381622d8671e6e3162a9f3a9f11879a7576fa
}
