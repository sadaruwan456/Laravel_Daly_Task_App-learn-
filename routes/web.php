<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/task',function(){

    $data = App\Models\Task::all();
return view('tasks')->with('tasks',$data);
});

Route::post('/savetask',[TaskController::class,'store']);

Route::get('/markascompleted/{id}',[TaskController::class,'updateTaskCompleted']);
Route::get('/markasnotcompleted/{id}',[TaskController::class,'updateTasknotCompleted']);
Route::get('/delete/{id}',[TaskController::class,'deleteData']);
Route::get('/update/{id}',[TaskController::class,'updatetaskview']);
Route::post('/updateData',[TaskController::class,'updateDatas']);

// Route::post('/savetask','TaskController@store');