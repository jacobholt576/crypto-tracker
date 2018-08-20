<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function trades() {
        return $this->hasMany('App\Trade');
    }
}
