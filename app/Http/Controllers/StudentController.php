<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function predict()
    {

        return view('student.pages.edit');
    }
    public function edit(Request $request)
    {
        $student= App\Student::where('id',Auth::user()->id)->firstOrFail();
        if($request->name != null){
             $student->name=$request->name;
        }
        if ($request->dob != null) {
            $student->dob = $request->dob;
        }
        if ($request->phone != null) {
            $student->phone = $request->phone;
        }
        if ($request->skills != null) {
            $student->skills = $request->skills;
        }
        if ($request->photo != null) {
            $file = $request->photo;
            $path = $file->store('public/images/profile');
            $student->photo_url = $path;
        }
        if ($request->name != null) {
            $file = $request->cv;
            $path = $file->store('public/documents');
            $student->cv_url = $path;
        }
        $student->save();
        dd($student);
        redirect('/student/profile');
    }
    public function support(Request $request)
    {

    }
}
