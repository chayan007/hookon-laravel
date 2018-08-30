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
Route::get('/search_internships', 'PublicController@view_internship');
Route::get('/search_course','PublicController@view_courses');

Route::get('/specific_internship', function(){
   return view('specific_internship');
});
Route::get('/specific_course', function(){
   return view('specific_course');
});

Route::get('/search_skills', 'SearchController@search_skills');
Route::get('/search_location', 'SearchController@search_location');
Route::get('/recruiter/delete/{id}','AdminController@deleteRecruiter');
Route::get('/student/delete/{id}', 'AdminController@deleteStudent');
Route::get('/category/delete/{id}','AdminController@deleteCategory');
Route::get('/location/delete/{id}', 'AdminController@deleteLocation');

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
  Route::get('/google_redirect', 'StudentAuth\LoginController@redirectToGoogle');
  Route::get('/g_callback', 'StudentAuth\LoginController@handleGoogleCallback');
  /*---Socialite Google login end---*/

  /*---Socialite FB login*/
  Route::get('/fb_redirect', 'StudentAuth\LoginController@redirectToFB');
  Route::get('/fb_callback', 'StudentAuth\LoginController@handleFBCallback');
  /*---Socialite FB login end---*/

  /*---Socialite LinkedIn login*/
  Route::get('/linkedin_redirect', 'StudentAuth\LoginController@redirectToLinkedIn');
  Route::get('/linkedin_callback', 'StudentAuth\LoginController@handleLinkedInCallback');
  /*---Socialite LinkedIn login end---*/


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


  /*---Socialite Google login*/
  Route::get('/google_recruiter_redirect', 'RecruiterAuth\LoginController@redirectToGoogle');
  Route::get('/g_callback', 'RecruiterAuth\LoginController@handleGoogleCallback');
  /*---Socialite Google login end---*/

  /*---Socialite FB login*/
  Route::get('/fb_recruiter_redirect', 'RecruiterAuth\LoginController@redirectTorFB');
  Route::get('/fb_callback', 'RecruiterAuth\LoginController@handleFBCallback');
  /*---Socialite FB login end---*/

  /*---Socialite LinkedIn login*/
  Route::get('/linkedin_recruiter_redirect', 'RecruiterAuth\LoginController@redirectToLinkedIn');
  Route::get('/linkedin_callback', 'RecruiterAuth\LoginController@handleFBCallback');
  /*---Socialite LinkedIn login end---*/

  Route::get('/register', 'RecruiterAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'RecruiterAuth\RegisterController@register');

  Route::post('/password/email', 'RecruiterAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RecruiterAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RecruiterAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RecruiterAuth\ResetPasswordController@showResetForm');
});
