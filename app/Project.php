<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
    
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
    
    public function donor()
    {
        return $this->belongsTo('App\Donor');
    }
   
}
