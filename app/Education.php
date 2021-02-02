<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
     public function user() {

     	return $this->belongsTo('App\User');
     }

     protected $fillable = ['profile_id', 'degree', 'university', 'location', 'from', 'to', 'completed', 'deploma'];
    
    

}
