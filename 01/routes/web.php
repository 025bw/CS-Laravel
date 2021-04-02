<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/setage',[HomeController::class,'setage']);
Route::get('/setname',[HomeController::class,'setname']);
Route::get('/getage',[HomeController::class,'getage']) ->middleware('check_age');
Route::get('/getname',[HomeController::class,'getname']) ->middleware('check_age');
Route::get('/delete',[HomeController::class,'delete'])->middleware('check_age');
Route::view('/test','test');