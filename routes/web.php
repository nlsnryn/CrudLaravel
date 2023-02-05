<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index'])->name('home');
Route::post('/save-task', [TodoListController::class, 'saveTask'])->name('saveTask');
Route::get('/delete-task/{id}', [TodoListController::class, 'deleteTask'])->name('deleteTask');