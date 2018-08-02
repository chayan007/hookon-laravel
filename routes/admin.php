<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::get('/admin', function () {
    return view('admin.pages.profile');
})->name('dashboard');
Route::get('/students', function () {
    return view('admin.pages.students');
})->name('students');
Route::get('/recruiters', function () {
    return view('admin.pages.recruiters');
})->name('recruiters');
Route::get('/internships', function () {
    return view('admin.pages.internships');
})->name('internship');
Route::get('/istatus', function () {
    return view('admin.pages.istatus');
})->name('internship status');
Route::get('/courses', function () {
    return view('admin.pages.courses');
})->name('courses');
Route::get('/cstatus', function () {
    return view('admin.pages.cstatus');
})->name('courses status');
Route::get('/settings', function () {
    return view('admin.pages.settings');
})->name('settings');
