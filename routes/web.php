<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Controllers\Auth\logincontrollers;
use App\Http\Controllers\Auth\newuserController;
use App\Http\Controllers\participantscontroller;
use App\Http\Controllers\pscontrollers;

use Illuminate\Routing\PendingResourceRegistration;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('newuser','auth.newuser');
Route::view('newadmin','auth.newadmin');
Route::post('/store',[newuserController::class,'store']);
Route::post('/adminstore',[newuserController::class,'adminstore']);   
Route::view('/home','home')->name('ps.home');
Route::view('login','auth.login');
Route::view('admin','auth.adminlogin');
Route::post('authenticate',[logincontrollers::class,'authenticate']);
// Route::post('authenticate',[Logincontroller::class,'authenticate']);
Route::get('logout',[Logincontroller::class,'logout']);
// Route::view('ps/create',[pscontrollers::class,'index']);
Route::get('ps/create',[pscontrollers::class,'create'])->name('ps.create');
Route::get('ps/index',[pscontrollers::class,'index'])->name('ps.index');
Route::post('ps/store',[pscontrollers::class,'store'])->name('ps.store');
Route::get('ps/show/{id}',[pscontrollers::class,'show'])->name('ps.show');
Route::get('ps/edit/{id}',[pscontrollers::class,'edit'])->name('ps.edit');
Route::put('ps/update/{id}',[pscontrollers::class,'update'])->name('ps.update');
Route::delete('ps/{id}',[pscontrollers::class,'destroy'])->name('ps.delete');
Route::view('createreg','participants.CreateReg');
Route::post('rdetails/store',[participantscontroller::class,'store'])->name('rdetails.store');
Route::get('/rdetails/index',[admincontroller::class,'index'])->name('redetails.index');
Route::post('rdetails/search',[admincontroller::class,'search'])->name('rdetails.search');
Route::view('teamform','participants.teamform');
Route::get('problemstatemts/index',[participantscontroller::class,'index'])->name('part.index');
Route::get('regs/show/{id}',[pscontrollers::class,'edit'])->name('regs.show');
Route::delete('regs/{id}',[admincontroller::class,'destroy'])->name('reg.delete');
