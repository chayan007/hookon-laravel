<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(){
        return view('views.search_internship');
    }
    public function search_skills(Request $request){


         try{
           if($request->val!=''){
             $category=DB::table('categories')->where('category_name','LIKE',$request->val.'%')->get();
              return $category;
           }

         } catch(\Exception $e){
           die("error is ".$e);
         }


    }
    public function search_location(Request $request){


         try{
           if($request->val!=''){
             $category=DB::table('locations')->where('location_name','LIKE',$request->val.'%')->get();
              return $category;
           }

         } catch(\Exception $e){
           die("error is ".$e);
         }


    }
}
