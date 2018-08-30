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

      //Check these-
      $internship->category_id = $cat_id;
      $internship->location_id = $loc_id;

      $internship->save();
      //dd($student);
      return redirect('/recruiter/profile');
  }
  public function postCourse(Request $request)
  {

      $loc_id = DB::table('locations')->where('location_name',$request->location)->value('id');
      $cat_id = DB::table('categories')->where('category_name',$request->domain)->value('id');

      //dd($request->desc);

      $course = new Course;

      $course->course = $request->course;
      $course->instructor = $request->instructor;
      //$internship->photo = $request->photo;
            $file = $request->photo;
            $path = $file->store('public/img/course');
            $course->photo = $path;
            $course->save();
      //To fix: File upload and file reflection in UI not working

      $course->url = $request->url;
      $course->company = $request->company;
      $course->location = $request->location;
      $course->photo_url = "";
      $course->domain = $request->domain;
      $course->about = $request->about;
      $course->syllabus = $request->syllabus;

      //Check these-
      $course->user_id = Auth::user()->id;
      $course->category_id = $cat_id;
      $course->location_id = $loc_id;

      $course->save();
      //dd($student);
      return redirect('/recruiter/profile');
  }
  public function editInternship()
  {
      $internships= Internship::where('user_id',Auth::user()->id);
      dd($internships);

  }
  public function predict()
  {

      return view('recruiter.pages.edit');
  }
  public function edit1(Request $request)
  {
      //$student= App\Student::where('id',1)->firstOrFail();
      try{
        $recruiter= Recruiter::where('id',Auth::user()->id)->firstOrFail();
      }catch(Exception $e){
        redirect('/recruiter/profile');
      }
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
      //dd($student);
      return redirect('/recruiter/profile');
  }
}
