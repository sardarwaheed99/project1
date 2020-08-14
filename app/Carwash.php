<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carwash extends Model
{
    protected $table = 'car_wash';
    public function users()
    {
        return $this->belongsTo('App\User');
    }

}