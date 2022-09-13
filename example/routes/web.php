<?php

use App\Http\Controllers\ProjectController;
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
//  TODO ::
Route::get('/', function () {
    return view('welcome');
})->name('login')->middleware('guest');

// Route::get('/dashboard',[ProjectController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard',[ProjectController::class,'index'])->middleware(['auth']);
Route::get('/dashboard/create',[ProjectController::class,'create'])->middleware(['auth']);
Route::post('/dashboard',[ProjectController::class,'store'])->middleware(['auth']);


require __DIR__.'/auth.php';
