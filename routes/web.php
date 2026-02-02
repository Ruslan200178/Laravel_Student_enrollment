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
    return view('index');
});

Route::get('/add-student', function () {
    return view('add_student');
})->name('add.student');



Route::get('/show-student', [StudentController::class, 'index'])
     ->name('show_student');

Route::post('/add-student', [StudentController::class, 'addStudent'])
     ->name('add_student');

     Route::get('/edit_student/{id}', [StudentController::class, 'edit'])
     ->name('edit_student');

   Route::put('/students/{id}', [StudentController::class, 'update'])
    ->name('students.update');

     Route::delete('/delete-student/{id}', [StudentController::class, 'destroy'])
     ->name('delete_student');


    // Teachers

  Route::get('/add-teacher', function () {
    return view('add_teacher');
})->name('add.teachers');

Route::post('/add-teacher', [TeacherController::class, 'addTeacher'])
     ->name('add_teacher');
Route::get('/show-teacher', [TeacherController::class, 'index'])
     ->name('show_teacher');


    //  Courses
Route::get('/add-course', [CourseController::class, 'create'])
     ->name('add_course');
Route::post('/add-course', [CourseController::class, 'store'])
        ->name('store_course');
        Route::get('/show-courses', [CourseController::class, 'index'])
        ->name('show_courses');


    // Enrollments
Route::get('/show_enroll', [EnrollmentController::class, 'index'])
     ->name('show_enroll');
Route::post('/enroll', [EnrollmentController::class, 'store'])
     ->name('enroll_student');
Route::get('/enroll', [EnrollmentController::class, 'create'])
     ->name('enroll');
