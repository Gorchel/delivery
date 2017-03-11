<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    public function goods()
    {
        return $this->belongsToMany('App\Order','orders_to_goods','good_id','order_id');
    }
}
