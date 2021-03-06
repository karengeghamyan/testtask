<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return redirect('auth/login');
// });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function() {
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/', 'CodeTrackingController@index');
	Route::get('/codes/delete/{id}', 'CodeTrackingController@destroy');
	Route::resource('codes', 'CodeTrackingController');
});

// Route::get('/codes/edit/:id', 'CodeTrackingController@edit');
// Route::get('/codes', 'CodeTrackingController@index');
// Route::post('/codes', 'CodeTrackingController@store');
// Route::get('/codes/delete/:id', 'CodeTrackingController@delete');