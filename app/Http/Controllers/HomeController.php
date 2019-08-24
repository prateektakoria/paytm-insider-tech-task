<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		if(!empty(request()->user()) && !empty(request()->user()->api_token)){
			$request = Request::create('/api/clubs', 'GET');
			$request->headers->set('Authorization', 'Bearer '.request()->user()->api_token);
			$response = app()->handle($request);
			$groups = json_decode($response->getContent());
			return view('groups', compact('groups'));
		}
		else{
			return view('welcome');
		}
	}

	public function register(){
		$redirection = redirect('/');
		$request = Request::create('/api/register', 'POST', array(
             "name"     => request('name'),
             "email"    => request('email'),
             "password"    => request('password'),
             "password_confirmation" => request('password_confirmation')
        ));
		$response = app()->handle($request);
		return $redirection;
	}

	public function login(){
		$redirection = redirect('/');
		$request = Request::create('/api/login', 'POST', array(
            "email" => request('email'),
            "password" => request('password')
        ));
		$response = app()->handle($request);
		return $redirection;
	}

	public function logout(){
		$redirection = redirect('/');
		$request = Request::create('/api/logout', 'POST');
		$request->headers->set('Authorization', 'Bearer '.request()->user()->api_token);
		$response = app()->handle($request);

		return $redirection;
	}
}