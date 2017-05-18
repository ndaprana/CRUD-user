<?php

namespace App\Http\Controllers;

use App\Home;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@index');
	|
	*/

	public function index()
	{
        if(!Auth::id()) return redirect( '/login');

		$data['user'] = Auth::user();

		return view('home')->with($data);

	}

	public function login()
	{
        if(Auth::id()) return redirect( '/');

		return view('login');
	}

	public function register()
	{
        if(Auth::id()) return redirect( '/');

		return view('register');
	}

	public function profile()
	{
        if(!Auth::id()) return redirect( '/login');

		$data['user'] = Auth::user();

		return view('profile')->with($data);
	}

	public function user()
	{
        if(!Auth::id()) return redirect( '/login');

        $data['users'] = User::getUser();
		$data['user'] = Auth::user();

		return view('table')->with($data);
	}

	public function actuser($id)
	{
        if(!Auth::id()) return redirect( '/login');

        User::actUser($id);

		return redirect( '/user');
	}

	public function inactuser($id)
	{
        if(!Auth::id()) return redirect( '/login');

        User::inactUser($id);

		return redirect( '/user');
	}	

	public function deluser($id)
	{
        if(!Auth::id()) return redirect( '/login');

        User::delUser($id);

		return redirect( '/user');
	}	

}