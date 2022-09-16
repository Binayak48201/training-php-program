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


Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard',[ProjectController::class,'index']);
    Route::get('/dashboard/create',[ProjectController::class,'create']);
    Route::post('/project',[ProjectController::class,'store']);
    Route::get('/project/{id}',[ProjectController::class,'edit']);
    Route::patch('/project/{id}',[ProjectController::class,'update']);

    Route::delete('/project/{id}',[ProjectController::class,'destroy']);
});

require __DIR__.'/auth.php';
