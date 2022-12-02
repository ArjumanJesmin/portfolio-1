<?php

use App\Http\Controllers\projectController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\welcomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get(['/',welcomeController::class,'welcome'])->name['welcome'];


Route::middleware(['auth','verified'])->group(function(){
Route::get('/dashboard',function(){
    return Inertia::render('Dashboard');
})->name('dashboard'); 
  
Route::resource('/skills',skillController::class);
Route::resource('/projects',projectController::class);

});

require __DIR__.'/auth.php';
