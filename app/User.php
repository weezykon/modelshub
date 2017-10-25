<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];
    // protected $fillable = [
    //     'firstname','lastname','username', 'email', 'password','verify','user_rand'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function education(){
        return $this->hasMany(Education::class);
    }

    public function works(){
        return $this->hasMany(Works::class);
    }

    public function certifications(){
        return $this->hasMany(Certifications::class);
    }

    public function pageants(){
        return $this->hasMany(Pageants::class);
    }

    public function members(){
        return $this->hasOne(Members::class);
    }

    public function models(){
        return $this->hasOne(Models::class);
    }
}
