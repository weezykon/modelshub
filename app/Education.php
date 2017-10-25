<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $guarded = [];
	
    // Belong To user
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
