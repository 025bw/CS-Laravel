<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
use App\Models\Post;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/welcome','welcome');
/* Route::get('/setage',[HomeController::class,'setage']);
Route::get('/setname',[HomeController::class,'setname']);
Route::get('/getage',[HomeController::class,'getage']);
Route::get('/getname',[HomeController::class,'getname']);*/
// Route::get('/delete',[HomeController::class,'delete']);
// Route::view('/test','test');
// Route::view('/home','home');
// Route::view('/app','layouts.app');
// Route::view('/child','child');
// Route::get('/login', function () {
// return view('login');
// });

// Route::get('/update', function () {
//     $accounts = Account::all();
//     return view('update',compact('accounts'));
// });


// Route::get('/getNameByUser/{id}',[PostController::class,'get_name']);

// Route::post('/login',[PostController::class,'login']);
// Route::get('/logout',[PostController::class,'logout']);
// Route::view('/post','post')->middleware('check_cre','check_admin');
// Route::get('/list',[PostController::class,'listuser']);
// Route::get('/list2',[PostController::class,'listcurrentuser']);
// Route::get('/adduser', function () {
//     return view('adduser');
// });
// Route::post('/adduser',[PostController::class,'adduser']);

// Route::view('/1','nav');
// Route::view('/2','layouts.2');

// Route::get('/',function(){
// // $account = Account::query()->find(1)->first();
// $account = DB::table('accounts')->whereIn('id',[2])->first();
// dd($account);

// });

Route::get('/add', function () {
    return view('posts/add');
});

Route::post('/add', [PostsController::class, 'add']);

Route::get('/', function () {
    $posts = Post::all();
    return view('posts/list', compact('posts'));
});

Route::get('/delete', [PostsController::class, 'delete']);

// Route::get('/nav', function () {
//     return view('x/nav');
// });

Route::get('/update', [PostsController::class, 'updateView']);

Route::post('/update', [PostsController::class, 'update']);

// Route::get('/post', function () {
//     return view('x/post');
// });