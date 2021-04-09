<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validate;

class UserController extends Controller
{
    //

    public function registerForm(Request $request)
    {

    	$validator = validate::make($request->all(), [
    		'name'     => 'required',
    		'email'    => 'required|email|unique:users,email',
    		'number'    => 'required|min:11|unique:users,phone',
    		'password' => 'required|min:6',
    	]);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	return view('frontend.auth.register');
    }



    public function loginForm()
    {
    	return view('frontend.auth.login');
    }
}
