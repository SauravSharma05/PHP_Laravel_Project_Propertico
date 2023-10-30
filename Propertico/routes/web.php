<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Frontend\Homecontroller;
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

Route::get('/',[Homecontroller::class,'index']);
Route::get('/home',[Homecontroller::class,'index']);

Route::get('/register',[Authcontroller::class,'index']);
Route::post('/register',[Authcontroller::class,'store']);


Route::get('/login',[Authcontroller::class,'login']);
Route::post('/login',[Authcontroller::class,'validate_login']);
