<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'categorie_id';
<<<<<<< HEAD
=======

    public function goods()
    {
        return $this->hasMany('App\Good','good_categorie_id');
    }
>>>>>>> bb3381622d8671e6e3162a9f3a9f11879a7576fa
}
