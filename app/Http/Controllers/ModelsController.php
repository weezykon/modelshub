<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models;
use App\User;

class ModelsController extends Controller
{
    public function create(){
    	// dd(request()->all());
    	// Create Models Profile
    	$modeltype = request('modeltype');
    	if(is_array($modeltype)){
			$modeltype = implode(',',$modeltype);
		}

    	$models = new Models;

    	//Process the data
    	Models::create([
    		'address' => request('address'),
    		'phone' => request('phone'),
    		'user_id' => auth()->id(),
    		'dob' => request('dob'),
    		'bio' => request('bio'),
    		'gender' => request('gender'),
    		'languages' => request('languages'),
    		'modeltype' => $modeltype,
    		'website' => request('website'),
    		'state' => request('state'),
    		'country' => request('country'),
    		'town' => request('town'),
    		'chest' => request('chest'),
    		'waist' => request('waist'),
    		'height' => request('height'),
    		'shoe' => request('shoe'),
    		'eye' => request('eye'),
    		'hair' => request('hair'),
    	]);

    	// Update User Type
    	$user = new User;
    	User::whereId(Auth::user()->id)->update(request(['type']));

    	return redirect('/avatar');
    }

    public function updatemodel(){
    	$user_id = Auth::user()->id;
    	Models::where('user_id', $user_id)
    			->update([
		    		'address' => request('address'),
		    		'phone' => request('phone'),
		    		'bio' => request('bio'),
		    		'languages' => request('languages'),
		    		'website' => request('website'),
		    		'town' => request('town'),
    	]);
    	return $message = 'Changes Saved';
    }
}
