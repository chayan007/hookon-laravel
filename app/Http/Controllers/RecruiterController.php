<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Internship;
use App\Course;
use App\Location;
use App\Category;
use App\Recruiter;
use DB;
use Hash;
use App\Intern;
use App\Student;

class RecruiterController extends Controller
{
  public function view_post_internship(Request $request){
      $locations = Location::all();
      $categories = Category::all();
      return view('recruiter.pages.postinternship',['locations' => $locations, 'categories' => $categories]);
  }
  public function view_post_course(Request $request){
      $locations = Location::all();
      return view('recruiter.pages.postcourse')->with('locations', $locations);
  }
  public function viewEditCourse(Request $request){
    $EditCourses = Course::all();
    $locations = Location::all();

    return view('recruiter.pages.editcourse',['locations' => $locations, 'EditCourses' => $EditCourses]);
  }
  public function postInternship(Request $request)
  {

      $loc_id = DB::table('locations')->where('location_name',$request->location)->value('id');
      $cat_id = DB::table('categories')->where('category_name',$request->profile)->value('id');

      //dd($request->desc);

      $internship = new Internship;

      $internship->company = $request->company;
      $internship->profile = $request->profile;
      //$internship->photo = $request->photo;


      //To fix: File upload and file reflection in UI not working
      $img = $request->photo;
      $img_path = $img->store('public/img/internship');
      $internship->logo_url = $img_path;

      $internship->email = $request->email;
      $internship->url = $request->url;
      $internship->phone = $request->phone;
      $internship->skills = $request->skills;
      $internship->desc = $request->desc;
      $internship->about = $request->about;
      $internship->location = $request->location;
      $internship->duration = $request->duration;
      $internship->stipend = $request->stipend;
      $internship->start_date = $request->start_date;
      $internship->perks = $request->perks;
      $internship->input = $request->input;

      //Check these-
      $internship->user_id = $request->user_id;
      $internship->category_id = $cat_id;
      $internship->location_id = $loc_id;

      $internship->save();
      //dd($student);
      return redirect('/recruiter/profile');
  }
  public function postCourse(Request $request)
  {

      $loc_id = DB::table('locations')->where('location_name',$request->location)->value('id');
      $cat_id = DB::table('categories')->where('category_name',$request->category)->value('id');

      //dd($request->desc);

      $course = new Course;

      $course->course = $request->course;
      $course->instructor = $request->instructor;

      if ($request->hasFile('photo')) {
            $file = $request->photo;
            $path = $file->store('public/img/course');
            $course->photo_url = $path;
      }
      //To fix: File upload and file reflection in UI not working

      $course->url = $request->url;
      $course->company = $request->company;
      $course->location = $request->location;
      $course->domain = $request->category;
      $course->about = $request->about;
      $course->syllabus = $request->syllabus;

      //Check these-
      $course->user_id = $request->user_id;
      $course->category_id = $cat_id;
      $course->location_id = $loc_id;

      $course->save();
      //dd($student);
      return redirect('/recruiter/postcourse')->with('status','Course has been Posted !');
  }
  public function viewInternship()
  {
      $locations = Location::all();
      $categories = Category::all();
      $internships= Internship::where('user_id',Auth::user()->id)->get();
      return view('recruiter.pages.editinternship',[
          'internships' => $internships,
          'categories' => $categories,
          'locations' => $locations,
      ]);

  }
  public function editInternship(Request $request, $id)
  {
      //Write appropriate logic
      $loc_id = DB::table('locations')->where('location_name',$request->location)->value('id');
      $cat_id = DB::table('categories')->where('category_name',$request->profile)->value('id');
      $curPath = Internship::where('id',$id)->select('logo_url')->get();

      if ($request->hasFile('photo')) {
        $file = $request->photo;
        $path = $file->store('public/img/internship');
      }else{
        $path = $curPath;
      }

      Internship::where('id', $id)->update(['company' => $request->company , 'profile' => $request->profile,
      'email' => $request->email, 'logo_url' => $path, 'url' => $request->url,
      'phone' => $request->phone,'skills' => $request->skills,  'desc' => $request->desc, 'about' => $request->about,
      'location' => $request->location,'duration' => $request->duration, 'stipend' => $request->stipend, 'start_date' => $request->start_date,
      'perks' => $request->perks, 'category_id' => $cat_id,
     'location_id' => $loc_id ]);

      return redirect('/recruiter/editinternship')->with('status','Course has been Updated !');
  }
  public function editCourse(Request $request, $id)
  {
    //Write appropriate Logic
    $loc_id = DB::table('locations')->where('location_name',$request->location)->value('id');
    $cat_id = DB::table('categories')->where('category_name',$request->category)->value('id');
    $curPath = Course::where('id',$id)->select('photo_url')->get();

    if ($request->hasFile('photo')) {
      $file = $request->photo;
      $path = $file->store('public/img/course');
    }else{
      $path = $curPath;
    }

    Course::where('id', $id)->update(['course' => $request->course , 'instructor' => $request->instructor,
    'url' => $request->url, 'company' => $request->company, 'instructor' => $request->instructor,
    'domain' => $request->category,'about' => $request->about,  'syllabus' => $request->syllabus,
    'photo_url'=>$path,  'category_id' => $cat_id,
   'location_id' => $loc_id ]);

    return redirect('/recruiter/editcourse')->with('status','Course has been Updated !');
  }
  public function predict()
  {
      $locations = Location::all();
      return view('recruiter.pages.edit')->with('locations', $locations);
  }
  public function edit(Request $request, $id)
  {
      try{
        $recruiter= Recruiter::where('id',$id)->firstOrFail();
      }catch(Exception $e){
        return redirect('/recruiter/profile')->with('error','Record Not Found');
      }
      //dd($request);
      if($request->name != null){
           $recruiter->name=$request->name;
           $recruiter->save();
      }
      if ($request->dob != null) {
          $recruiter->dob = $request->dob;
          $recruiter->save();
      }
      if ($request->password != null) {
          $recruiter->password = Hash::make($request->password);
          $recruiter->save();
      }
      if ($request->email != null) {
          $recruiter->email = $request->email;
          $recruiter->save();
      }
      if ($request->phone != null) {
          $recruiter->phone = $request->phone;
          $recruiter->save();
      }
      if ($request->company != null) {
          $recruiter->company = $request->company;
          $recruiter->save();
      }
      if ($request->hasFile('photo')) {
          $file = $request->photo;
          $path = $file->store('public/images/profile');
          $recruiter->photo_url = $path;
          $recruiter->save();
      }

      $recruiter->save();
      return redirect('/recruiter/profile')->with('status','Details have been successfully changed !');
  }
  public function getStatus()
  {
      $interns = Intern::where('recruiter_id',Auth::user()->id)->get();
      $students = Student::all();
      return view('recruiter.pages.status',['interns' => $interns, 'students' => $students]);
  }
  public function changeStatus(Request $request, $id)
  {
    $intern = Intern::where('id',$id)->firstOrFail();
    $intern->status = $request->status;
    $intern->save();
    return redirect('/recruiter/status')->with('status','Status has been changed Successfully !');
  }
}
