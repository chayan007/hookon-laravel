<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();

    //dd($users);

    return view('student.pages.profile');
})->name('home');
Route::get('/profile',function(){
    return view('student.pages.profile');
})->name('dashboard');
Route::get('/edit', 'StudentController@predict');//->name('edit');
Route::post('/edit1', 'StudentController@edit1');
Route::get('/status', function () {
    return view('student.pages.status');
})->name('status');
Route::get('/support', function () {
    return view('student.pages.support');
})->name('support');
Route::post('/edit', 'StudentController@support');
Route::get('/apply/{id}','StudentController@applyInternship');

