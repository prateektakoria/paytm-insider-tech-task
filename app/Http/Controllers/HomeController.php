<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function yes(){
		return redirect('/');
	}
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
		$request = Request::create('/api/register', 'POST', array(
             "name"     => request('name'),
             "email"    => request('email'),
             "password"    => request('password'),
             "password_confirmation" => request('password_confirmation')
        ));
		$response = app()->handle($request);
		return redirect('http://localhost:8000/');
	}

	public function login(){
		$request = Request::create('/api/login', 'POST', array(
             "email" => request('email'),
             "password" => request('password')
        ));
		$response = app()->handle($request);
		return redirect('http://localhost:8000/');
	}

	public function logout(){
		$request = Request::create('/api/logout', 'POST');
		$request->headers->set('Authorization', 'Bearer '.request()->user()->api_token);
		$response = app()->handle($request);

		return redirect('http://localhost:8000/');
	}
}