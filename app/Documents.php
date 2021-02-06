<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
       public function user() {

     	return $this->belongsTo('App\User');
     }
}


