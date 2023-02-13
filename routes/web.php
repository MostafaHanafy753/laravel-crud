<?php

use App\Http\Controllers\adminscontroller;
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

Route::get('/',[adminscontroller::class,'index'])->name('admin');
Route::get('/create',[adminscontroller::class,'create'])->name("createIteams");
Route::post('/store',[adminscontroller::class,'store'])->name("storeIteams");
