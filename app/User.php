<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'lastname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


   public function tasks() {

     return $this->hasMany('App\Task');
   }  

  /*link to profile*/
    public function profile(){

        return $this->hasOne('App\Profile');
    }

  
    public function education() {

      return $this->hasMany('App\Education');
    }  

    public function experience()
    {
        return $this->hasMany('App\Experience');
    }  

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    
    
    public function position()
    {
        return $this->hasOne('App\Position');
    }
   
   
   
    public function documents()
{
    return $this->hasMany('App\Document');
}
   
    public function contract()
    {
        return $this->hasMany('App\Contract');
    }
    
}
