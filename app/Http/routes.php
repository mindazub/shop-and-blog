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
        return view('pages.searchresults')->withPosts($posts)->with('q', $q);
    else 
    	return view ('pages.posts')->withPosts($posts);
});


Route::auth();

Route::get('/mindazub', 'MindazubController@index');

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
Route::get('/products2', 'HomeController@products2');

Route::get('/products/{id}', [
	'as' => 'product.show',
	'uses' => 'HomeController@product'
	]);


Route::get('/posts', 'HomeController@posts');
Route::get('/forum', 'ForumController@index');


Route::get('/posts/add',[
	'as' => 'posts.add',
	'uses' => 'HomeController@addPost'
	]);

Route::post('/posts',[
	'as' => 'posts.store',
	'uses' => 'HomeController@storePost'
	]);

Route::get('/posts/{id}',[
	'as' => 'post.show',
	'uses' => 'HomeController@post'
	]);

Route::get('/posts/{id}/edit',[
	'as' => 'post.edit',
	'uses' => 'HomeController@editPost'
	]);

Route::patch('/posts/{id}',[
	'as' => 'post.update',
	'uses' => 'HomeController@updatePost'
	]);

Route::delete('/posts/{id}',[
	'as' => 'post.destroy',
	'uses' => 'HomeController@deletePost'
	]);

Route::get('/profile/{id}', [
	'as' => 'profile.show',
	'uses' => 'HomeController@profile'
	]);


Route::get('/profile/{id}/edit', [
	'as' => 'profile.edit',
	'uses' => 'HomeController@editProfile'
	])->middleware('auth');


Route::patch('/profile/{id}', [
	'as' => 'profile.update',
	'uses' => 'HomeController@updateProfile'
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