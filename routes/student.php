<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();

    //dd($users);

    return view('student.home');
})->name('home');
Route::get('/profile',function(){
    return view('student.pages.profile');
})->name('dashboard');
Route::get('/edit', function () {
    return view('student.pages.edit');
})->name('edit');
Route::post('/edit', 'StudentController@edit');
Route::get('/status', function () {
    return view('student.pages.status');
})->name('status');
Route::get('/support', function () {
    return view('student.pages.support');
})->name('support');
Route::post('/edit', 'StudentController@support');
