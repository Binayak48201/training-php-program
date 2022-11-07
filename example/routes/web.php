<?php

use App\Http\Controllers\{ProjectController,TaskController};
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
    Route::get('/project/{project}',[ProjectController::class,'edit']);
    Route::patch('/project/{project}',[ProjectController::class,'update']);

    Route::delete('/project/{id}',[ProjectController::class,'destroy']);


    Route::post('/project/{project}/task',[TaskController::class,'store']);
});

require __DIR__.'/auth.php';
