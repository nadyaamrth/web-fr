<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::get('/post',[PostController::class,'index']);
Route::view('/portofolio', 'portofolio.portofolio');

Route::get('/post/create',[PostController::class,'create']);
Route::post('/post/create',[PostController::class,'store']);

Route::get('/post/{post:slug}/edit',[PostController::class,'edit']);
Route::patch('/post/{post:slug}/edit',[PostController::class,'update']);

Route::delete('/post/{post:slug}/delete',[PostController::class,'destroy']);

Route::get('/post/{post:slug}',[PostController::class,'show']);
