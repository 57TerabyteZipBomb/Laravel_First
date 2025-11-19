<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassroomAdminController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EvilController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

//main place to put all the routing stuff
Route::get("/test", action: [EvilController::class,"index"]);
Route::get("/profile", action: [EvilController::class,"profile"]);
Route::get("/contacts", action: [EvilController::class,"contacts"]);
Route::get("/", action: [HomeController::class,"index"]);
Route::get("/new-profile", action: [ProfileController::class,"index"]);
Route::get("/new-contacts", action: [ContactController::class,"index"]);
Route::get("/students", action: [StudentController::class,"index"]);
Route::get("/guardians", action: [GuardianController::class,"index"]);
Route::get("/classrooms", action: [ClassroomController::class,"index"]);
Route::get("/teachers", action: [TeacherController::class,"index"]);
Route::get("/subjects", action: [SubjectController::class,"index"]);
Route::get("/admin", action: [AdminController::class,"home"]);
Route::get("/admin/test", action: [AdminController::class,"test"]);
// Admin: Students
Route::get('/admin/students', [StudentAdminController::class, 'index'])->name('student.index');
Route::post('/admin/students', [StudentAdminController::class, 'store'])->name('student.add');
// Admin: Classrooms
Route::get('/admin/classrooms', [ClassroomAdminController::class, 'index'])->name('classroom.index');
Route::post('/admin/classrooms', [ClassroomAdminController::class, 'store'])->name('classroom.add');
