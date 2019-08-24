<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function clubs(){
    	return $this->hasMany('App\Club','country_code', 'code');
    }
}
