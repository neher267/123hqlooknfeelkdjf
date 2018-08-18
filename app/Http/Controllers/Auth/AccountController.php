<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class AccountController extends Controller
{


    public function account()
    {
    	return view('auth.account');
    }

    public function post_account(Request $request)
    {
    	$credentials = [
		    'mobile'    => $request->mobile,
		    'password' => '',
		];
		Sentinel::authenticate($credentials);
		$user = Sentinel::check();
		$role = Sentinel::findRoleBySlug('customer');

		dd($user);
		if($role && !$user)
		{

			$user = Sentinel::registerAndActivate($request->all());
        	$role->users()->attach($user);   	
		} 


		
		return redirect('/');
    }
}
