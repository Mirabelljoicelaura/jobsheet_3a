<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiraController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
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



Route::get('/',[HomeController::class,"index"]);
Route::get('/about',[AboutController::class,"about"]);
Route::get('/articles/{id}',[ArticleController::class,"articles"]);

Route::prefix('category')->group(function(){
    Route::get('/',[CategoryController::class,"index"]);
    Route::get('/{id}',[CategoryController::class,"show"]);
});
Route::prefix('news')->group(function(){
    Route::get('/',[NewsController::class,"index"]);
    Route::get('/{judul}',[NewsController::class,"show"]);
});
Route::prefix('program')->group(function(){
    Route::get('/',[ProgramController::class,"index"]);
    Route::get('/{id}',[ProgramController::class,"show"]);
});
Route::get('/aboutus',[AboutusController::class,"index"]);
Route::resource('/contactus', ContactusController::class)->only([
    'index', 'show'
   ]);

