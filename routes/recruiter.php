<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('recruiter')->user();

    //dd($users);

    return view('recruiter.pages.profile');
})->name('home');
Route::get('/profile', function () {
    return view('recruiter.pages.profile');
})->name('dashboard');
Route::post('/editme/{id}', 'RecruiterController@edit');
Route::get('/edit', 'RecruiterController@predict');//->name('edit');
Route::post('/post_internship', 'RecruiterController@postInternship');
Route::post('/post_course','RecruiterController@postCourse');
Route::get('/status', function () {
    return view('recruiter.pages.status');
})->name('status');
Route::get('/support', function () {
    return view('recruiter.pages.support');
})->name('support');
Route::post('/edit', 'StudentController@support');
Route::get('/postinternship', 'RecruiterController@view_post_internship');
Route::post('/edit/{id}', 'RecruiterController@editInternship');
Route::get('/editinternship','RecruiterController@viewInternship');
Route::post('/editc/{id}','RecruiterController@editCourse');
Route::get('/editcourse', 'RecruiterController@viewCourse');
Route::get('/postcourse', 'RecruiterController@view_post_course');
