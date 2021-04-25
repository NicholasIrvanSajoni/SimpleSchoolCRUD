<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\http\Controllers\TeacherController;
use App\Http\Controllers\TestApiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/students', [StudentController::class, 'student_view']);
Route::get('/teachers', [TeacherController::class, 'teacher_view']);
Route::get('/classrooms', [ClassroomController::class, 'classroom_view']);
Route::get('/students/createstudent',[StudentController::class, 'create_student_view']);
Route::post('/students/createstudent/create',[StudentController::class, 'create_student_post']);
Route::get('/students/editstudent/{id}',[StudentController::class, 'edit_student_view']);
Route::post('/students/editstudent/edit/{id}', [StudentController::class, 'edit_student_post']);
Route::get('/students/deletestudent/{id}', [StudentController::class, 'delete_student']);