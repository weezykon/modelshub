<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
	// Fetch User
	public $user;

    public function __construct(User $user){
		$this->middleware('auth');
		$this->user = $user;
	}


	public function index(){
		if (Auth::user()->type == '') {
          return redirect('/accounttype');
        }else{
			return view('welcome');
		}
	}
}