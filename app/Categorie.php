<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'categorie_id';

    public function goods()
    {
        return $this->hasMany('App\Good','good_categorie_id');
    }
}
