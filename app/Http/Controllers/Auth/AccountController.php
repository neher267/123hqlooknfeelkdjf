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
		    'password' => '1^_!4651#',
		];

		Sentinel::authenticate($credentials);
		$user = Sentinel::check();
		$role = Sentinel::findRoleBySlug('customer');

		//$varified = sendVarificationCode();
		
		if(!$user && $role) //registration //$varified = sendVarificationCode();
		{
			$new_user = Sentinel::registerAndActivate($credentials);
        	$role->users()->attach($new_user);  
        	Sentinel::authenticate($credentials);		
		}
		
		return redirect('checkout');
    }
}
