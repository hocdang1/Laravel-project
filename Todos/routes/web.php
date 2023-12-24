<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
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

Route::get('/', [todosController::class,'index'])->name("todo.home");
Route::get('/create', function () {
    return view('create');
})-> name("todo.create") ;

//edit todo route
Route::get('/edit/{id}',[todosController::class,'edit'])->name("todo.edit") ;


//create todo route

Route::post('/create', [todosController::class,'store'] )->name("todo.store");


//Delete todo route
Route::get('/delete/{id}', [todosController::class,'delete'] )->name("todo.delete");


//update todo data route

Route::post('/update', [todosController::class,'updateData'] )->name("todo.updateData");
