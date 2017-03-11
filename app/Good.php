<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $primaryKey = 'good_id';
<<<<<<< HEAD
=======

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','good_categorie_id');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Good','orders_to_goods','order_id','good_id');
    }

    public function files()
    {
        return $this->morphMany('App\File', 'item');
    }
>>>>>>> bb3381622d8671e6e3162a9f3a9f11879a7576fa
}
