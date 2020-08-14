<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public function products()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
        
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
        
    }

}