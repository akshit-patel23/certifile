<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Courses;

class Coursecontrol extends Controller
{
  public function create(){
    return view('admin.course.create');
  }
  public function store(Request $request){
    $course = new Courses;
    $course->name=$request->get('name');
    $course->save();   
    return redirect('/course/read'); 
  }
  public function read()
  {
    $courses=Courses::paginate(10);
    return view('admin.course.read',['courses'=> $courses]);
  }
  public function delete(Courses $courses,$id){
    $courses=Courses::find($id);
    $courses->delete();
    return redirect('/course/read');
  }

  public function edit($id){
    $courses = Courses::find($id);
    return view('admin.course.update',['courses'=>$courses]);
  }

  public function update(Request $request,$id) {
    $courses=Courses::find($id);
    $courses->name=$request->get('name');
    $courses->save();

    return redirect('/course/read');
  }
  

}