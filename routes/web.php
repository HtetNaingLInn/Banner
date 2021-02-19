<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;

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

Route::get('banner/index',[BannerController::class,'index'])->name('banner.index');
Route::get('banner/create',[BannerController::class,'create'])->name('banner.create');
Route::post('banner/store',[BannerController::class,'store'])->name('banner.store');
Route::get('banner/edit/{id}',[BannerController::class,'edit'])->name('banner.edit');
Route::post('banner/update/{id}',[BannerController::class,'update'])->name('banner.update');

Route::get('banner/delete/{id}',[BannerController::class,'destroy'])->name('banner.destroy');



