<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models;
use App\Members;
use App\Education;
use App\Certifications;
use App\Notifications;
use App\Works;
use App\Pageants;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
		if (Auth::user()->type == '') {
          return redirect('/accounttype');
        }else{
	    	$id = Auth::user()->id;
	    	$user = User::find($id);
	    	$models = Models::where('user_id', $id)->get();
	    	$members = Members::where('user_id', $id)->get();
	    	if($models->isEmpty()){ $models = false; }
	    	if($members->isEmpty()){ $members = false; }
	    	// dd($members);

			return view('home.settings',compact('user','models','members'));
		}
	}

	public function update(){
		// dd(request()->all());
    	User::whereId(Auth::user()->id)->update(request(['firstname','lastname','email']));
    	// return $message = 'Changes Saved';
    	session()->flash('message','Changes Saved');
        return redirect('/settings');
	}

	public function password(){
		// dd(request('password'));
		$password = bcrypt(request('password'));
		// dd($password);
    	User::find(Auth::user()->id)->update(['password' => $password]);
    	return $message = 'Changes Saved';
	}
}
