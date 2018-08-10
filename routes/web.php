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

Route::get('/', function () {
    return view('index');
});
Route::get('/search_internships', function(){
   return view('search_internship');
});
Route::get('/search_course', function(){
   return view('search_course');
});

Route::get('/specific_internship', function(){
   return view('specific_internship');
});
Route::get('/specific_course', function(){
   return view('specific_course');
});


Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::get('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  /*---Socialite Google login*/
  Route::get('/google_redirect', 'StudentAuth\LoginController@redirectToProvider');
  Route::get('/callback', 'StudentAuth\LoginController@handleProviderCallback');
  /*---Socialite Google login end---*/



  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');



});

Route::group(['prefix' => 'recruiter'], function () {
  Route::get('/login', 'RecruiterAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RecruiterAuth\LoginController@login');
  Route::get('/logout', 'RecruiterAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'RecruiterAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'RecruiterAuth\RegisterController@register');

  Route::post('/password/email', 'RecruiterAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RecruiterAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RecruiterAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RecruiterAuth\ResetPasswordController@showResetForm');
});