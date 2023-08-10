<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('student', [StudentController::class, 'index'])->name('student');
Route::resource('students', StudentController::class);

Route::get('create', [StudentController::class, 'create'])->name('students.create');
Route::post('create', [StudentController::class, 'store'])->name('students.store');
