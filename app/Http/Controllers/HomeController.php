<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Auth;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request as GuzzleRequest;

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
		$request = Request::create('/api/register', 'POST', array(
             "name"     => request('name'),
             "email"    => request('email'),
             "password"    => request('password'),
             "password_confirmation" => request('password_confirmation')
        ));
		$response = app()->handle($request);
		$register_api_response = $response->getContent();
		return view('welcome', compact('register_api_response'));
		
	}

	public function login(){
		$request = Request::create('/api/login', 'POST', array(
             "email" => request('email'),
             "password" => request('password')
        ));
		$response = app()->handle($request);
		$login_api_response = $response->getContent();
		return redirect()->action('HomeController@index');
	}

	public function logout(){
		$request = Request::create('/api/logout', 'POST');
		$request->headers->set('Authorization', 'Bearer '.request()->user()->api_token);
		$response = app()->handle($request);

		return redirect('/');
	}
}