<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pstaff extends Model
{
    public function user(){

      return $this->belongsTo('App\User');
    }

       
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
    public function donor()
    {
        return $this->belongsTo('App\Donor');
    }
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
