<?php

namespace App\Http\Controllers;
use App\Internship;
use App\Course;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function view_internship(Request $request)
    {
        $view_internship = Internship::all();
        return view('search_internship')->with('view_internship', $view_internship);
    }

    public function view_courses(Request $request)
    {
        $view_course = Course::all();
        return view('search_course')->with('view_course', $view_course);
    }
    public function sort_internships(Request $request)
    {
        if($request==NULL)
        {
            $view_internship = Internship::all();
            return view('search_internship')->with('view_internship', $view_internship);
        }
        else if($request->category==NULL)
        {
            $view_internship = Internship::where('location',$request->location);
            return view('search_internship')->with('view_internship', $view_internship);
        }
        else if($request->location==NULL)
        {
            $view_internship = Internship::where('category', $request->category);
            return view('search_internship')->with('view_internship', $view_internship);
        }
        else{
            $view_internship = Internship::where([
                ['category', '=', $request->category],
                ['location', '=' ,$request->location],
            ]);
            return view('search_internship')->with('view_internship', $view_internship);
        }

    }
    public function view_specific_internship($id)
    {
        $internship = Internship::where('id',$id)->firstOrFail();
        return view('specific_internship',['internship' => $internship]);
    }
    public function view_specific_course($id)
    {
        $course = Course::where('id', $id)->firstOrFail();
        return view('specific_course', ['course' => $course]);
    }
}
