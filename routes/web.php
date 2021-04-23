<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testapi/students', [TestApiController::class, 'getStudents']);
Route::get('/testapi/students/create', [TestApiController::class, 'createStudent']);
Route::get('/testapi/students/update', [TestApiController::class, 'updateStudent']);
Route::get('/testapi/students/delete', [TestApiController::class, 'deleteStudent']);
