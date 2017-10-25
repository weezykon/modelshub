<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $guarded = [];

    public function user(){
    	return $this->hasOne(User::class);
    }
}
