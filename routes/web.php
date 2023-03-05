<?php

use App\Http\Controllers\StudentController;
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


Route::get('/student-lists',[StudentController::class, 'studentLists']);
Route::get('/student-form',[StudentController::class, 'studentForm']);
Route::post('/add-new-student',[StudentController::class, 'addNewStudent']);
Route::get('edit-student/{id}',[StudentController::class, 'editStudent']);
Route::post('/update-student',[StudentController::class, 'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class, 'deleteStudent']);

