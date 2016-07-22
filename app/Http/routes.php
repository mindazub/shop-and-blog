<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/products', 'HomeController@products');

Route::get('/products/{id}', [
	'as' => 'product.show',
	'uses' => 'HomeController@product'
	]);


Route::get('/posts', 'HomeController@posts');

Route::get('/posts/{id}',[
	'as' => 'post.show',
	'uses' => 'HomeController@post'
	]);


Route::get('/profile/{id}', [
	'as' => 'profile.show',
	'uses' => 'HomeController@profile'
	]);


Route::group(['middleware'=> ['web', 'auth'], 'prefix'=>'backend'], function()
	{ Route::get('backend/dashboard', array(
		'as'=>'dashboard', 
		'uses'=>'BackendDashboardController@getDashboard')); 
});

