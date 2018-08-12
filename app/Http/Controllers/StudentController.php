<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;

class StudentController extends Controller
{
    public function predict()
    {

        return view('student.pages.edit');
    }
    public function edit1(Request $request)
    {
        //$student= App\Student::where('id',1)->firstOrFail();
        try{
          $student= Student::where('id',Auth::user()->id)->firstOrFail();
        }catch(Exception $e){
          redirect('/student/profile');
        }
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
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $path = $file->store('public/images/profile');
            $student->photo_url = $path;
            $student->save();
        }
        if ($request->hasFile('cv')) {
            $file = $request->cv;
            $path = $file->store('public/documents');
            $student->cv_url = $path;
            $student->save();
        }
        $student->save();
        //dd($student);
        return redirect('/student/profile');
    }
    public function support(Request $request)
    {

    }
}
