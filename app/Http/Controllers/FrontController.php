<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class FrontController extends Controller
{
    // 
    public function index(){
        $dt = [];
        $dt['day']= "mondy";
    	$dt['links'] = [
    		'fb' => 'fb.com',
    		'tw' => 'tw.com'

    	];
    	return view("welcome", $dt);
    }

    public function reg(){
        return view('signup');
    }

    public function regsubmit(Request $request){
        $validator = validator::make($request->all(), [
            'email' => 'required|email',
            'password' =>'required|min:6',
            'photo' => 'required|image|max:10420',
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $photo = $request->file('photo');
       if($photo->isValid()){
        $filnme = uniqid('photo_', true).'.'.$photo->getClientOriginalExtension();
        $photo->storeAs('images', $filnme);
       }
       session()->flash('msg', 'File uplod success');
       return redirect()->back();

      
        
    }
}
