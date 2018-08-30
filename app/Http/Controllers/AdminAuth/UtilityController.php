<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use DB;

class UtilityController extends Controller
{
    public function view_students(Request $request){
       $students = Student::all();
       return view('admin.pages.students')->with('students',$students);
    }
    public function update_students(Request $request){
        //dd($request);
        $student = DB::table('students')->where('name', $request->name)->get();//where('name', $request->name)->firstOrFail();
        dd($student->name);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->skills = $request->skills;

        $student->save();

        return redirect('/admin/admin');
    }
}
