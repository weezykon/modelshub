<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SigninController extends Controller
{
	public function __construct(){
		$this->middleware('guest')->except(['destroy','accounttypeupdate']);
	}

    public function index(){
    	return view('auth.login');
    }

    public function create(){
   		// Authenticate user
      if(!User::where('username', request('username'))->exists()){
        session()->flash('message','User Does not exist');
        return back();
      }

   		if (! auth()->attempt(request(['username','password']))){
   			// return back()->withErrors([
   			// 	'message' => 'Wrong Username Or Password, Please Try Again'
   			// ]);
        session()->flash('message','Wrong Password. Try Again');
        return back();
   		}
   		// Checks if user is verified
      if (Auth::user()->verify == 1) {
        // Checks if User has picked a membership type
        if (Auth::user()->type == '') {
          return redirect('/accounttype');
        }else{
          return redirect('/');
        }
      }else{
        auth()->logout();
        session()->flash('message','Please Verify Your Account');
        return back();
      }
   	}
    
    public function destroy(){
    	auth()->logout();
    	return redirect('/');
    }
}
