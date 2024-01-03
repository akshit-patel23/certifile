<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Models\Template;

class Templatecontrol extends Controller{
     public function create(){
        return view('admin.template.create');
     }
     public function store(Request $request){
        $temp= new Template;
        $temp->name=$request->get('name');
        $temp->htmlstr=$request->get('htmlstr');
        $temp->save();

        return redirect('/template/add');
     }
     public function read(){
         $temp=Template::all();
         return view('admin.template.read',['temp'=>$temp]);
     }
     public function edit($id){
      $temp=Template::find($id);
      return view('admin.template.update',['temp'=>$temp]);
     }
     public function update(Request $request,$id){
      $temp=Template::find($id);
      $temp->name=$request->get('name');
      $temp->htmlstr=$request->get('htmlstr');
      $temp->save();

      return redirect('/template/read');
     }
     public function delete($id){
      $temp= Template::find($id);
      $temp->delete();
      return redirect('/template/read');
     }
     

}