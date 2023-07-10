<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\createStudentInfo;

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
Route::get('students',[StudentInfoController::class, 'index'])->name('student.index');
Route::get('students/create',[StudentInfoController::class, 'create'])->name('student.create');
Route::post('students',[StudentInfoController::class, 'store'])->name('student.store');
