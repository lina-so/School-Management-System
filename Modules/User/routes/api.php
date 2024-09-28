<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\Student\StudentController;
use Modules\User\Http\Controllers\Teacher\TeacherController;
use Modules\User\Http\Controllers\MyParent\MyParentController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

// Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
//     Route::apiResource('user', UserController::class)->names('user');
// });

Route::apiResource('my_parents', MyParentController::class)->names('my_parents');
Route::apiResource('student', StudentController::class)->names('student');
Route::apiResource('teacher', TeacherController::class)->names('teacher');
