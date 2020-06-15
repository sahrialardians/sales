<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
