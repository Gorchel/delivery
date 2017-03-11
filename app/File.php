<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey = 'file_id';
<<<<<<< HEAD
=======
    public $timestamps = false;

    public function items()
    {
        return $this->morphTo();
    }
>>>>>>> bb3381622d8671e6e3162a9f3a9f11879a7576fa
}


