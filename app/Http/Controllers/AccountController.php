<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Models;
use App\Members;
use App\Education;
use App\Certifications;
use App\Works;
use App\Pageants;
use Auth;
use Carbon\Carbon;

class AccountController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function accounttypeview(){
    	if (Auth::user()->type == '') {
    		return view('account.account_type');
    	}else{
    		return redirect('/');
    	}
    }

    public function avatar(){
    	return view('account.avatar');
    }

    public function cover(){
    	return view('account.cover');
    }

    // Education
    public function accounteducation(){
    	return view('account.education');
    }

    public function showeducation(){
    	$educations = Education::latest()->where('user_id', Auth::user()->id)->get();
    	// dd($education);
    	return view('ajax.education',compact('educations'));
    }

    public function posteducation(){
    	if (request('to') == '') {
    		$to = 'Present';
    	}else{
    		$to = request('to');
    	}

    	// dd(request()->all());

    	Education::create(array(
            'school' => request('school'),
            'user_id' => Auth::user()->id,
            'degree' => request('degree'),
            'field' => ucfirst(request('field')),
            'grade' => request('grade'),
            'from' => request('from'),
            'to' => $to,
            'description' => request('description'),
        ));

        return $message = 'Education Added';
    }

    public function deleteeducation($id){
    	$edu = Education::where('id', $id)->delete();
    	if($edu){
    		return $message = 'Deleted';
    	}
    	return false;
    }

    // Work
    public function accountwork(){
    	return view('account.work');
    }

    public function showwork(){
    	$works = Works::latest()->where('user_id', Auth::user()->id)->get();
    	return view('ajax.work',compact('works'));
    }

    public function postwork(){
    	if (request('endwork') == '') {
    		$end = 'Present';
    	}else{
    		$end = request('endwork');
    	}

    	// dd(request()->all());

    	Works::create(array(
            'company' => request('company'),
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'location' => ucfirst(request('location')),
            'start' => request('startwork'),
            'end' => $end,
            'description' => request('description'),
        ));

        return $message = 'Work Added';
    }

    public function deletework($id){
    	$work = Works::where('id', $id)->delete();
    	if($work){
    		return $message = 'Deleted';
    	}
    	return false;
    }

    // Certification
    public function accountcert(){
    	return view('account.certificate');
    }

    public function showcertification(){
    	$certificates = Certifications::latest()->where('user_id', Auth::user()->id)->get();
    	return view('ajax.certificate',compact('certificates'));
    }

    public function postcert(){
    	if (request('endcert') == '') {
    		$end = 'Present';
    	}else{
    		$end = request('endcert');
    	}

    	// dd(request()->all());

    	Certifications::create(array(
            'cert_name' => request('cert_name'),
            'user_id' => Auth::user()->id,
            'authority' => request('authority'),
            'license' => ucfirst(request('license')),
            'url' => request('url'),
            'start' => request('startcert'),
            'end' => $end,
            'description' => request('description'),
        ));

        return $message = 'Certification Added';
    }

    public function deletecert($id){
    	$cert = Certifications::where('id', $id)->delete();
    	if($cert){
    		return $message = 'Certification Deleted';
    	}
    	return false;
    }

    // Pageantry
    public function accountpageant(){
    	return view('account.pageant');
    }

    public function showpageant(){
    	$pageants = Pageants::latest()->where('user_id', Auth::user()->id)->get();
    	return view('ajax.pageant',compact('pageants'));
    }

    public function postpageant(){
    	if (request('endpageant') == '') {
    		$end = 'Present';
    	}else{
    		$end = request('endpageant');
    	}

    	// dd(request()->all());

    	Pageants::create(array(
            'name' => request('pageantry'),
            'user_id' => Auth::user()->id,
            'position' => request('position'),
            'url' => request('url'),
            'start' => request('startpageant'),
            'end' => $end,
            'description' => request('description'),
        ));

        return $message = 'Pageant Added';
    }

    public function deletepageant($id){
    	$pag = Pageants::where('id', $id)->delete();
    	if($pag){
    		return $message = 'Deleted';
    	}
    	return false;
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
    	return redirect('/cover');
    }

    public function updatecover(Request $request){

    	$this->validate($request,[
    		'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    	]);

    	// dd(request()->all());
    	// rename image name or file name 
        $image = $request->file('image');
        $input['imagename'] = Auth::user()->username.'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/cover');
        $image->move($destinationPath, $input['imagename']);
        
    	// Process the data
    	// $user = new User;
    	User::where('id', Auth::user()->id)
                ->update([
                    'cover' => $input['imagename'],
                ]);
    	return redirect('/');
    }
}
