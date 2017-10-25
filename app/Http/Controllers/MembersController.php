<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Members;
use App\User;

class MembersController extends Controller
{
    public function create (){
    	// dd(request()->all());
    	// Create Member Profile

    	$members = new Members;

    	//Process the data
    	Members::create([
    		'address' => request('address'),
    		'phone' => request('phone'),
    		'user_id' => auth()->id(),
    		'dob' => request('dob'),
    		'bio' => request('bio'),
    		'gender' => request('gender'),
    		'languages' => request('languages'),
    		'website' => request('website'),
    		'state' => request('state'),
    		'country' => request('country'),
    		'town' => request('town'),
    	]);

    	// Update User Type
    	$user = new User;
    	User::whereId(Auth::user()->id)->update(request(['type']));

    	return redirect('/avatar');
    }

    public function updatemember(){
    	$user_id = Auth::user()->id;
    	Members::where('user_id', $user_id)
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
