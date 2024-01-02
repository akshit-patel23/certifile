<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class Authcontrol extends Controller
{

   public function loadregister()
   {
      if(Auth::user()&& Auth::user()->is_admin == 1){
         return redirect('admin/dashboard');
      }
      else if(Auth::user()&& Auth::user()->is_admin == 0){
         return redirect ('/dashboard');
      }
      return view('auth.register');
   }
   public function register(Request $request)
   {
      $request->validate([
         'name' => 'string|required',
         'email' => 'email|required|unique:users',
         'password' => 'string|required'
      ]);

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      return back()->with('success', 'Your registration has been Successfull.');
   }


   public function loadlogin()
   {
      if(Auth::user()&& Auth::user()->is_admin == 1){
         return redirect('admin/dashboard');
      }
      else if(Auth::user()&& Auth::user()->is_admin == 0){
         return redirect ('/dashboard');
      }
      return view('auth.login');
   }

   public function userlogin(Request $request)
   {
      $request->validate([
         'email' => 'required|email',
         'password' => 'required'
      ]);

      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
         if (Auth::user()->is_admin == 1) {
            return redirect('/admin/dashboard');
         } else {
            return redirect('/dashboard');
         }
      } else {
         return back()->with('error', 'invalid credentials');
      }
   }

   public function dashboard()
   {
      return redirect('/generate');
   }

   public function admindashboard()
   {
      return redirect('/course/read');
   }

   public function logout(Request $request){
      $request->session()->flush();
      Auth::logout();
      return redirect('/');
   }
}
