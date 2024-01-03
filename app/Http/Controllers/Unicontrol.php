<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Models\Universities;
use App\Models\Courses;

class Unicontrol extends Controller
{
 public function create(){
    $courses = Courses::all();
    return view('admin.uni.create',['courses'=>$courses]);
 }
 public function store(Request $request){
    $uni = new Universities;
    $uni->name=$request->get('name');
    $uni->courses = json_encode($request->get('courses'));
    $uni->save();
    return redirect('/university/read');
 }
 public function read(){
   $uni = Universities::all();
   $uniwithcourse = [];

   foreach ($uni as $university) {
       $selectedcourseid = json_decode($university->courses, true);

       $selectedcourses = Courses::whereIn('id', $selectedcourseid)->get();

       $uniwithcourse[] = [
           'university' => $university,
           'courses' => $selectedcourses,
       ];
   }

   return view('admin.uni.read', ['uniwithcourse'=>$uniwithcourse]);
}

 public function delete(Universities $uni, $id){
   $uni=Universities::find($id);
   $uni->delete();
   return redirect('/university/read');
 }

 public function edit($id){
   $uni = Universities::find($id);
   $courses=Courses::all();
   $selectedcourseid=json_decode($uni->courses,true);
   return view('admin.uni.update',['uni'=>$uni,
                                    'courses'=>$courses,
                                    'selectedcourseid'=>$selectedcourseid
                                 ]);
 }

 public function update(Request $request,$id){
   $uni=Universities::find($id);
   $uni->name=$request->get('name');
   $uni->courses=json_encode($request->get('courses'));
   $uni->save();

   return redirect('/university/read');
 }
}