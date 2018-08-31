<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();
    return view('admin.pages.profile');
})->name('home');

Route::get('/admin', function () {
    return view('admin.pages.profile');
})->name('dashboard');
Route::get('/students', 'AdminController@viewStudent')->name('students');

Route::get('/recruiters', 'AdminController@viewRecruiter')->name('recruiters');
Route::get('/internships', 'AdminController@viewInternship')->name('internship');
Route::get('/istatus', 'AdminController@viewInternshipStatus')->name('internship status');
Route::get('/courses', 'AdminController@viewCourse')->name('courses');
Route::get('/cstatus', 'AdminController@viewCourseStatus')->name('courses status');
Route::get('/settings', 'AdminController@editAdmin')->name('settings');
Route::post('/category','AdminController@addCategory');
Route::get('/category', 'AdminController@viewCategory')->name('category');
Route::post('/location','AdminController@addLocation');
Route::get('/location','AdminController@viewLocation')->name('location');
<<<<<<< HEAD
=======
Route::post('/update/student/{id}','AdminController@editStudent');
Route::post('/update/recruiter/{id}', 'AdminController@editRecruiter');
Route::post('/update/internship/{id}', 'AdminController@editInternship');
>>>>>>> 10fbb2e140b90a72e49b24c74ba74ea17b07e005
