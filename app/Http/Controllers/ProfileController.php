<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;
use Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$user = User::where('id', auth::user()->id)->first();

    	return view('profile.index', compact('user'));
    }

    public function update(Request $request){
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	Alert::success('User Sukses diupdate', 'Success');
    	return redirect('profile');
    }
}
