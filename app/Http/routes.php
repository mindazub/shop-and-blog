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

// Route::get('/admin', 'AdminController@index');
Route::get('/admin', [
	'as' => 'admin.show',
	'uses' => 'AdminController@index'
	])->middleware('auth');

// SOURCE
// http://justlaravel.com/search-functionality-laravel/
// SOURCE

Route::any('/search',function(){
    $q = Request::get ( 'q' );
    $posts = \App\Post::where('title','LIKE','%'.$q.'%')->paginate(9);
    if(count($posts) > 0)
        return view('pages.posts')->withPosts($posts);
    else 
    	return view ('pages.posts')->withPosts($posts);
});


Route::auth();

Route::get('/auth/success', [
    'as'   => 'auth.success',
    'uses' => 'Auth\AuthController@success'
]);

// Route::get('/admin', [
// 	'as' => 'admin.show',
// 	'uses' => 'AdminController@index'
// 	])->middleware('admin');

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


Route::get('/profile/{id}/edit', [
	'as' => 'profile.edit',
	'uses' => 'HomeController@editProfile'
	])->middleware('auth');

Route::group(['middleware'=> ['web', 'auth'], 'prefix'=>'backend'], function()
	{ Route::get('backend/dashboard', array(
		'as'=>'dashboard', 
		'uses'=>'BackendDashboardController@getDashboard')); 
});



// Route::any('/search',function(){
//     $q = Input::get ( 'q' );
//     $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//     if(count($user) > 0)
//         return view('welcome')->withDetails($user)->withQuery ( $q );
//     else return view ('welcome')->withMessage('No Details found. Try to search again !');
// });