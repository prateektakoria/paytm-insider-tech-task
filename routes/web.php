<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/yes', function(){
	return redirect('/');
});
Route::get('/', 'HomeController@index')->name('landing-page');
Route::post('/register', 'HomeController@register');
Route::post('/login', 'HomeController@login');
Route::post('/logout', 'HomeController@logout');
// Route::get('/test', 'ClubController@test');