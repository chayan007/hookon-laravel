<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('recruiter')->user();

    //dd($users);

    return view('recruiter.home');
})->name('home');
Route::get('/profile', function () {
    return view('recruiter.pages.profile');
})->name('dashboard');
Route::get('/edit', function () {
    return view('recruiter.pages.edit');
})->name('edit');
Route::post('/edit', 'StudentController@edit');
Route::get('/status', function () {
    return view('recruiter.pages.status');
})->name('status');
Route::get('/support', function () {
    return view('recruiter.pages.support');
})->name('support');
Route::post('/edit', 'StudentController@support');
Route::get('/postinternship', function () {
    return view('recruiter.pages.postinternship');
});
Route::get('/editinternship', function () {
    return view('recruiter.pages.editinternship');
});
