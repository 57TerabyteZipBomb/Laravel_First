<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EvilController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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