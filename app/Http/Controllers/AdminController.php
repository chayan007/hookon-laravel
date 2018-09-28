<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;

use App\Internship;
use App\Recruiter;
use App\Location;
use App\Intern;
use App\Course;
use App\Category;
use App\Admin;
use Hash;

class AdminController extends Controller
{
    public function viewStudent()
    {
        $students= Student::all();
        return view('admin.pages.students',['students' => $students]);
    }
    public function deleteStudent($id)
    {
        $student = Student::where('id',$id)->firstOrFail();
        $student->delete();
        $student->save();
    }
    public function editStudent(Request $request, $id)
    {
        $student = Student::where('id',$id)->firstOrFail();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->skills = $request->skills;
        $student->dob = $request->dob;

        $student->save();

        return redirect('/admin/students');


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
    public function editRecruiter(Request $request, $id)
    {
      $recruiter = Recruiter::where('id',$id)->firstOrFail();

      $recruiter->name = $request->name;
      $recruiter->email = $request->email;
      $recruiter->phone = $request->phone;
      $recruiter->company = $request->company;
      $recruiter->dob = $request->dob;

      $recruiter->save();

      return redirect('/admin/recruiters');
    }
    public function viewCategory()
    {
        $categories = Category::all();
        return view('admin.pages.category',['categories' => $categories]);
    }
    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->category_name= $request->category_name;
        $category->save();
        return redirect('/admin/category')->with('status','Category is added !');
    }
    public function deleteCategory($id)
    {
        $category= Category::where('id',$id)->firstOrFail();
        $category->delete();
        return redirect('/admin/category')->with('status', 'Category is Deleted !');
    }
    public function viewLocation()
    {
        $locations = Location::all();
        return view('admin.pages.location', ['locations' => $locations]);
    }
    public function addLocation(Request $request)
    {
        $location = new Location;
        $location->location_name = $request->location_name;
        $location->save();
        return redirect('/admin/location')->with('status', 'Location is Added !');
    }
    public function deleteLocation($id)
    {
        $location = Location::where('id', $id)->firstOrFail();
        $location->delete();
        return redirect('/admin/location')->with('status', 'Location is Deleted !');
    }
    public function viewInternship()
    {
        $internships = Internship::all();
        return view('admin.pages.internships',['internships' => $internships]);
    }
    public function editInternship(Request $request, $id)
    {
      $internship = Internship::where('id',$id)->firstOrFail();

      $internship->company = $request->company;
      $internship->profile = $request->profile;
      $internship->email = $request->email;
      $internship->url = $request->url;
      $internship->phone = $request->phone;
      $internship->location = $request->location;
      $internship->stipend = $request->stipend;

      $internship->save();

      return redirect('/admin/internships');
    }
    public function deleteInternship($id)
    {
        $internship = Internship::where('id',$id)->firstOrFail();
        $internship->delete();
        return redirect('admin.pages.profile')->with('status','Internship has been deleted successfully !');
    }
    public function viewCourse()
    {
        $courses = Course::all();
        return view('admin.pages.courses', ['courses' => $courses]);
    }
    public function editCourse(Request $request,$id)
    {
        //Write appropriate logic
          $course= Course::where('id',$id)->firstOrFail();

          $course->company = $request->name;
          $course->instructor = $request->email;
          $course->location = $request->location;
          $course->url = $request->url;
          $course->category = $request->category;
          $course->syllabus = $request->syllabus;
          $course->about = $request->about;
          $course->vip = $request->vip;

          $course->save();
    }
    public function deleteCourse($id)
    {
        $course = Course::where('id',$id)->firstOrFail();
        $course->delete();
        return redirect('admin.pages.profile')->with('status', 'Course has been deleted successfully !');
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
    public function viewEditPage(){
      return view('admin.pages.edit');
    }
    public function EditAdminDetails(Request $request){
      try{
        $admin= Admin::where('id',Auth::user()->id)->firstOrFail();
      }catch(Exception $e){
        return redirect('/admin/profile')->with('error','Record Not Found');
      }
      //dd($request);
      $admin->name = $request->name;
      $admin->email = $request->email;

      if ($request->password != null) {
          $admin->password = Hash::make($request->password);
      }

      if ($request->hasFile('photo')) {
          $file = $request->photo;
          $path = $file->store('public/images/profile');
          $admin->photo = $path;
      }

      $admin->save();
      return redirect('/admin/admin');

    }

}
