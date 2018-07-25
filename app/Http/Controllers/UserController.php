<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return 'hello world';
    }

    public function login()
    {
    	return view('frontend.login');
    }

    public function register()
    {
    	return view('frontend.register');
    }

    public function registerPost(Request $req)
    {
    	$req->validate([
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'ic' => 'required|unique:users',
    		'password' => 'required'
    	],[

    		'name.required'=> 'Sila masukkan nama penuh',
    		'email.required' => 'Sila masukkan email',
    		'email.email'=> 'Sila masukkan email yang sah',
    		'email.unique'=> 'Email sudah wujud',
    		'ic.required'=> 'Sila masukkan nokp',
    		'ic.unique'=> 'Nokp sudah wujud',
    		'password.required'=>'Sila masukkan katalaluan ',
    	]);

    	$user = new User();
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->ic = $req->ic;
    	$user->password = bcrypt($req->password);
    	$user->save();

    	return back()->with('success','Successfully registered');

    }
}
