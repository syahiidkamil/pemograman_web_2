<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', 'App\Http\Controllers\EmployeeController@index')->middleware('auth'); ;

// New route for Employee data
// Route::get('/employees', 'App\Http\Controllers\EmployeeController@index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');
