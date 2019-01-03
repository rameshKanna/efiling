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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@home');
Route::get('important_dates', 'HomeController@important_dates');
Route::get('downloads', 'HomeController@downloads');


Auth::routes();

Route::resource('partnerProfile', 'PartnerProfileController');
Route::resource('tds', 'TDSController');

Route::group(['middleware'=>['web']],function(){

	//Authentication route
	Route::get('auth/login','Auth\LoginController@getLogin');
	Route::post('auth/login','Auth\LoginController@postLogin');
	Route::get('auth/logout','Auth\LoginController@getLogout');
	
	//Registration route
	Route::get('auth/register','Auth\RegisterController@getRegister');
	Route::post('auth/register','Auth\RegisterController@postRegister');

	// Reset request email
        // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

        // // Reset form
        // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        // Route::post('password/reset', 'Auth\RessetPasswordController@reset');

        Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
		Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


//Route::get('/home', 'HomeController@index')->name('home');
});