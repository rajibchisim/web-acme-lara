<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id';

    public function user(){
        $this->belongsTo('App\User');
    }
}
