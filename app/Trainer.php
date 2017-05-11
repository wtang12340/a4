<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    public function monsters(){

        return $this->hasMany('App\Monster');
    }
}
