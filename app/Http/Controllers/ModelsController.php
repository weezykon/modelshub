<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models;
use App\Modelshoots;
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

	public function shoot(){
    	return view('account.shoot');
    }
	
	public function updateshoots(Request $request){

    	$this->validate($request,[
    		'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);

    	// dd(request()->all());
    	// rename image name or file name 
        $image = $request->file('file');
        $input['imagename'] = Auth::user()->username.'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/shoots');
        $image->move($destinationPath, $input['imagename']);
        
    	// Process the data
    	// $user = new User;
    	Modelshoots::create([
    		'user_id' => auth()->id(),
    		'photo' => $input['imagename'],
    	]);
    	// return redirect('/');
    }
}
