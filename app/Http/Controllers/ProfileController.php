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

class ProfileController extends Controller
{
    public function showprofile($profile){
    	$pro = ucfirst($profile);
    	$user = User::where('username', $pro)->get();
    	// $user = DB::table('users')->where('username', $pro)->get();
    	if($user->isEmpty()){
    		return view('errors.user',compact('pro'));
    	}
    	$user_id = $user[0]->id;
    	// $works = Works::where('user_id', $user_id)->get();
    	// $educations = Education::where('user_id', $user_id)->get();
    	$models = Models::where('user_id', $user_id)->get();
    	// $certificates = Certifications::where('user_id', $user_id)->get();
    	$members = Members::where('user_id', $user_id)->get();
    	// $pageants = Pageants::where('user_id', $user_id)->get();

    	// Notify user
    	if(auth()->id() != $user_id) {
    		$notify = Notifications::where('user_id', auth()->id())->where('notify', $user_id)->exists();
    		if($user[0]->type){
	    		if (!$notify) {
		    		$notifications = new Notifications;
			    	Notifications::create([
			    		'user_id' => auth()->id(),
			    		'notify' => $user[0]->id,
			    		'type' => 'visit',
			    	]);
			    }
			}
    	}
    	
    	if($user[0]->type == 'Member'){
    		return view('home.profile',compact('user','members'));
    	}elseif($user[0]->type == 'Model'){
    		return view('home.profile',compact('user','models'));
    	}else{
    		return redirect('/accounttype');
    	}
    }

    public function showpageant($id){
    	$pageants = Pageants::latest()->where('user_id', $id)->get();
    	return view('ajax.pageant',compact('pageants'));
    }

    public function showcertification($id){
    	$certificates = Certifications::latest()->where('user_id', $id)->get();
    	return view('ajax.certificate',compact('certificates'));
    }

    public function showwork($id){
    	$works = Works::latest()->where('user_id', $id)->get();
    	return view('ajax.work',compact('works'));
    }

    public function showeducation($id){
    	$educations = Education::latest()->where('user_id', $id)->get();
    	return view('ajax.education',compact('educations'));
	}
	
	public function updateavatar(Request $request){

    	$this->validate($request,[
    		'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);

    	// dd(request()->all());
    	// rename image name or file name 
        $image = $request->file('image');
        $input['imagename'] = Auth::user()->username.'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/profile');
        $image->move($destinationPath, $input['imagename']);
        
    	// Process the data
    	// $user = new User;
    	User::where('id', Auth::user()->id)
                ->update([
                    'avatar' => $input['imagename'],
                ]);
		// return redirect('/cover');
		return back();
    }

    public function updatecover(Request $request){

    	$this->validate($request,[
    		'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);

    	// dd(request()->all());
    	// rename image name or file name 
		$image = $request->file('cover');
        $input['imagename'] = Auth::user()->username.'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/cover');
        $image->move($destinationPath, $input['imagename']);
        
    	// Process the data
    	// $user = new User;
    	User::where('id', Auth::user()->id)
                ->update([
                    'cover' => $input['imagename'],
                ]);
		// return redirect('/');
		return back();
    }
}
