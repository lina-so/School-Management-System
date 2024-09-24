<?php

use Illuminate\Support\Facades\Route;
use Modules\School\Http\Controllers\SchoolController;
use Modules\School\Http\Controllers\Grade\GradeController;
use Modules\School\Http\Controllers\Classroom\ClassroomController;

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
//     Route::apiResource('school', SchoolController::class)->names('school');
// });

Route::apiResource('grade', GradeController::class)->names('grade');
Route::apiResource('classroom', ClassroomController::class)->names('classroom');

