<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//index
Route::get('/', function () {return view('welcome');});

//show register form
Route::get('/register', [UserController::class, 'create']);

//register user
Route::post('/register_user', [UserController::class, 'store']);

//show log in form
Route::get('/login', function () {return view('login');});

//logout auth user
Route::post('/logout', [UserController::class,'logout']);

//log in 
Route::post('/authenticate', [UserController::class, 'authenticate']);

//file download
Route::get('/download/{file}', [UserController::class, 'download'])->name('download');

Route::get('/users', [UserController::class, 'users']);

//show edit form
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');

Route::put('/users/{id}', [UserController::class, 'update'])->name('update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');