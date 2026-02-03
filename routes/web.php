<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseController;
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
    return view('index');  // This loads resources/views/index.blade.php
});
// Students CRUD routes
Route::resource('students', StudentController::class);

// Teachers CRUD routes
Route::resource('teachers', TeacherController::class);

// Courses CRUD routes
Route::resource('courses', CourseController::class);

// Enrollments CRUD routes
Route::resource('enrollments', EnrollmentController::class);
