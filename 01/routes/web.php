<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome','welcome');
/* Route::get('/setage',[HomeController::class,'setage']);
Route::get('/setname',[HomeController::class,'setname']);
Route::get('/getage',[HomeController::class,'getage']);
Route::get('/getname',[HomeController::class,'getname']);*/
Route::get('/delete',[HomeController::class,'delete']);
Route::view('/test','test');
Route::view('/home','home');
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[PostController::class,'login']);
Route::get('/logout',[PostController::class,'logout']);
Route::view('/post','post')->middleware('check_cre','check_admin');
Route::get('/list',[PostController::class,'listuser']);
Route::get('/list2',[PostController::class,'listcurrentuser']);