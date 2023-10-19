<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/',[TodoController::class,'homepage'])->name('homepage');
Route::get('/all-todo',[TodoController::class,'allTodo'])->name('all-todos');
Route::get('/store',[TodoController::class,'store'])->name('store');
Route::post('/submit-todo',[TodoController::class,'submitTodo'])->name('submit');