<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Internship;

class AdminController extends Controller
{
    public function viewStudent()
    {
        $students= Student::all();
        return view('admin.pages.student',['student' => $students]);
    }
    public function deleteStudent($id)
    {
        $student = Student::where('id',$id)->firstOrFail();
        $student->delete();
        $student->save();
    }
    public function editStudent(Request $request)
    {
        //Write the Proper Logic

    }
    public function viewRecruiter()
    {
        $recruiters = Recruiter::all();
        return view('admin.pages.recruiters',['recruiters' => $recruiters]);
    }
    public function deleteRecruiter($id)
    {
        $recruiter = Recruiter::where('id', $id)->firstOrFail();
        $recruiter->delete();
    }
    public function editRecruiter(Request $request)
    {
        //Write the proper logic
    }
    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->category_name= $request->category_name;
        $category->save();
    }
    public function deleteCategory($id)
    {
        $category= Category::where('id',$id)->firstOrFail();
        $category->delete();
    }
    public function addLocation(Request $request)
    {
        $location = new Location;
        $location->location_name = $request->location_name;
        $location->save();
    }
    public function deleteLocation($id)
    {
        $location = Location::where('id', $id)->firstOrFail();
        $location->delete();
    }
    public function viewInternship()
    {
        $internships = Internship::all();
        return view('admin.pages.internships',['internships' => $internships]);
    }
    public function editInternship($id)
    {
        //Write logic
    }
    public function deleteInternship($id)
    {
        $internship = Internship::where('id',$id)->firstOrFail();
        $internship->delete();
        return view('admin.pages.profile')->with('status','Internship has been deleted successfully !');
    }
    public function viewCourse()
    {
        $courses = Course::all();
        return view('admin.pages.courses', ['courses' => $courses]);
    }
    public function editCourse(Request $request)
    {
        //Write appropriate logic
    }
    public function deleteCourse($id)
    {
        $course = Course::where('id',$id)->firstOrFail();
        $course->delete();
        return view('admin.pages.profile')->with('status', 'Course has been deleted successfully !');
    }
    public function viewInternshipStatus()
    {
        $interns = Intern::all();
        return view('admin.pages.istatus',['interns' => $interns]);
    }
    public function viewCourseStatus()
    {
        $interests = Interest::all();
        return view('admin.pages.cstatus', ['interests' => $interests]);
    }


}
