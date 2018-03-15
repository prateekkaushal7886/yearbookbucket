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
/*
--------------------------------------------------------------------------
Auth::routes()
--------------------------------------------------------------------------
	php artisan make:auth was used to create inbuilt login register and logout functonality of laravel
	login page is edited
*/

	Route::get('/', function () {
		return view('auth.login');
	});

	Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Just added to fix issue

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile_index', 'profile@index');
Route::get('/profile_index/{roll}', 'profile@testimonials');
Route::post('/search','HomeController@search');
Route::get('/comment/{id}','ImageController@comment');


Route::get('/bucket', 'BucketController@index');
Route::post('/bucketpost/{id}','BucketController@comment');
/*
--------------------------------------------------------------------------
FileController 
--------------------------------------------------------------------------
	It is used to upload pic and caption in the dashboard page.
	
*/

	Route::post('/upload_pic_moto','FileController@upload_pic_moto');
	Route::post('/writetestimony/{roll}','ViewsController@write');

	Route::get('/upload_pic_moto','HomeController@index');


	Route::get('/upload','ImageController@index');

	Route::post('/upload','ImageController@upload');

	Route::get('/details',function(){
		$user = App\User::get();
		$roll = Auth::user()->rollno;
		$notifications = App\views::where('depmate',$roll)->where('read','1')->get()->toArray();

		return view('details1',compact('user','notifications'));
	});
	Route::post('/details','HomeController@edit');



	Route::get('/writeup','WriteupController@index');

	Route::post('/writeup','WriteupController@store');

	Route::get('/writeup/{id}','WriteupController@delete');

	Route::post('/updates','WriteupController@updates');
	Route::post('/approve','ViewsController@approve');

	Route::get('/approve/{id}','ViewsController@approval');
	Route::get('/disapprove/{id}','ViewsController@disapproval');

	Route::get('/read/{id}','ViewsController@read');

//route for navbar unseen testinomial from navbar.blade.php 
//go to profile.php controller

Route::get('/updateread', 'profile@updateread');
Route::post('/comment','CommentController@add');
Route::post('/commentadd','CommentController@new');
Route::post('/likes','LikesController@load');
Route::post('/likeadd','LikesController@like');


//change password route referenced by navbar2.blade.php
//go to env file to change email and passord 
//go to config/mail from there change the from name and id
Route::get('send','mailController@send');


Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('accept/{token}', 'InviteController@accept')->name('accept');



//referenced by navbar2
Route::get('/trending','CountController@index');