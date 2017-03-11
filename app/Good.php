<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $primaryKey = 'good_id';

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
}
