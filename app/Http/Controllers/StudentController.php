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
        $student= App\Student::where('id',1)->firstOrFail();
        if($request->name != null){
             $student->name=$request->name;
             $student->save();
        }
        if ($request->dob != null) {
            $student->dob = $request->dob;
            $student->save();
        }
        if ($request->phone != null) {
            $student->phone = $request->phone;
            $student->save();
        }
        if ($request->skills != null) {
            $student->skills = $request->skills;
            $student->save();
        }
        if ($request->photo != null) {
            $file = $request->photo;
            $path = $file->store('public/images/profile');
            $student->photo_url = $path;
            $student->save();
        }
        if ($request->name != null) {
            $file = $request->cv;
            $path = $file->store('public/documents');
            $student->cv_url = $path;
            $student->save();
        }
        redirect('/student/profile');
    }
    public function support(Request $request)
    {

    }
}
