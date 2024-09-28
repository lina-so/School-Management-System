<?php

use Illuminate\Support\Facades\Route;
use Modules\School\Http\Controllers\SchoolController;
use Modules\School\Http\Controllers\Exam\ExamController;
use Modules\School\Http\Controllers\Unit\UnitController;
use Modules\School\Http\Controllers\Grade\GradeController;
use Modules\School\Http\Controllers\Quizze\QuizzeController;
use Modules\School\Http\Controllers\Section\SectionController;
use Modules\School\Http\Controllers\Subject\SubjectController;
use Modules\School\Http\Controllers\Question\QuestionController;
use Modules\School\Http\Controllers\Classroom\ClassroomController;
use Modules\School\Http\Controllers\Assignment\AssignmentController;
use Modules\School\Http\Controllers\Attendance\AttendanceController;
use Modules\School\Http\Controllers\OnlineClass\OnlineClassController;

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
Route::apiResource('assignment', AssignmentController::class)->names('assignment');

Route::apiResource('attendance', AttendanceController::class)->names('attendance');
Route::apiResource('exam', ExamController::class)->names('exam');
Route::apiResource('online_Class', OnlineClassController::class)->names('online_Class');
Route::apiResource('question', QuestionController::class)->names('question');

Route::apiResource('quizze', QuizzeController::class)->names('quizze');
Route::apiResource('section', SectionController::class)->names('section');
Route::apiResource('subject', SubjectController::class)->names('subject');
Route::apiResource('unit', UnitController::class)->names('unit');




