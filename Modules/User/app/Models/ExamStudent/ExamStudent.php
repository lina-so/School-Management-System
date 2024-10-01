<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\ExamStudent/ExamStudentFactory;

class ExamStudent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['student_id','quizze_id','start_at'];

    // protected static function newFactory(): ExamStudent/ExamStudentFactory
    // {
    //     // return ExamStudent/ExamStudentFactory::new();
    // }
}
