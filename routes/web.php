<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutLicense;
use App\Http\Controllers\Index1Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\penlatiesController;
use App\Http\Controllers\index4Controller;
use App\Http\Controllers\index3Controller;
use App\Models\Index4;


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

Route::get('/',function(){
    return view('welcome');
});

 Route::get('/index',function(){
    return view('index');
 });



Route::get('/index2',function(){
    return view('index2');
});

Route::get('/index3',function(){
    return view('index3');
});


Route::get('/gallery',function(){
    return view('Gallery');
});


Route::get('/about',function(){
    return view('About_License');
});


Route::get('/contact',[ContactController::class, 'index']);
Route::post('/contact',[ContactController::class, 'register']);

Route::get('/vehicle',[VehicleController::class, 'index']);
Route::post('/vehicle',[VehicleController::class, 'register']);

Route::get('/penlaties',[penlatiesController::class, 'index']);
Route::post('/penlaties',[penlatiesController::class, 'register']);


Route::get('/index1',[index1Controller::class, 'index']);
Route::post('/index1',[index1Controller::class, 'register']);

Route::get('/index4',[index4Controller::class, 'index']);
Route::post('/index4',[index4Controller::class, 'register']);
Route::get('/index4/view',[index4Controller::class, 'view']);

Route::get('/index4/create',[index4Controller::class, 'create']);

Route::get('/index4/edit/{id}',[index4Controller::class, 'edit']);
Route::post('/index4/update/{id}',[index4Controller::class, 'update']);
Route::get('/index4/delete/{id}',[index4Controller::class, 'delete'])->name('index4.delete');





Route::get('/index3',[index3Controller::class, 'index']);
Route::post('/index3',[index3Controller::class, 'register']);


Route::get('/index4',function(){
    return view('index4');
});

