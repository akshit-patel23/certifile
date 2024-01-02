<?php

use App\Http\Controllers\Authcontrol;
use App\Http\Controllers\Coursecontrol;
use App\Http\Controllers\Templatecontrol;
use App\Http\Controllers\Unicontrol;
use App\Http\Controllers\Usercontrol;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register',[Authcontrol::class,'loadregister']);
Route::post('/register',[Authcontrol::class,'register'])->name('userregister');
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/',[Authcontrol::class,'loadlogin']);
Route::post('/login',[Authcontrol::class,'userlogin'])->name('userlogin');
Route::get('/logout',[Authcontrol::class,'logout']);


Route::group(['middleware'=>['web','checkadmin']],function(){
    Route::get('/admin/dashboard',[Authcontrol::class,'admindashboard']);

    
    Route::get('/course/read',[Coursecontrol::class,'read']);
    Route::get('/course/edit/{id}',[Coursecontrol::class,'edit']);
    Route::post('/course/update/{id}',[Coursecontrol::class,'update']);
    Route::get('/course/add',[Coursecontrol::class,'create']);
    Route::post('coursestore',[Coursecontrol::class,'store']);
    Route::get('/course/delete/{id}',[Coursecontrol::class,'delete']);



    Route::get('/university/read',[Unicontrol::class,'read']);
    Route::get('/university/edit/{id}',[Unicontrol::class,'edit']);
    Route::post('/university/update/{id}',[Unicontrol::class,'update']);
    Route::get('/university/add',[Unicontrol::class,'create']);
    Route::post('unistore',[Unicontrol::class,'store']);
    Route::get('/university/delete/{id}',[Unicontrol::class,'delete']);



    Route::get('/template/read',[Templatecontrol::class,'read']);
    Route::get('/template/add',[Templatecontrol::class,'create']);
    Route::post('tempstore',[Templatecontrol::class,'store']);
    Route::get('/template/edit/{id}',[Templatecontrol::class,'edit']);
    Route::post('/template/update/{id}',[Templatecontrol::class,'update']);
    Route::get('/template/delete/{id}',[Templatecontrol::class,'delete']);

});

Route::group(['middleware'=>['web','checkuser']],function(){
    Route::get('/dashboard',[Authcontrol::class,'dashboard']);
});



Route::get('/generate',[Usercontrol::class,'userform']);
Route::post('/fetchcourse/{id}',[Usercontrol::class,'fetchcourse']);
Route::post('/previewtemp/{id}',[Usercontrol::class,'previewtemp']);
Route::post('/importdata',[Usercontrol::class,'import']);

