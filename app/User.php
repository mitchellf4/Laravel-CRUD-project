<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth; 


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id','photo_id', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('App\Role');


    }


    public function photo(){

        return $this->belongsTo('App\Photo'); 
    }

    public function isAdmin(){
        
         if(auth()->user()->role_id == 1){
            
            return true;
         }
         return false; 
     }
}
