<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\SubjectTeacher/SubjectTeacherFactory;

class SubjectTeacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['subject_id','teacher_id'];


    // protected static function newFactory(): SubjectTeacher/SubjectTeacherFactory
    // {
    //     // return SubjectTeacher/SubjectTeacherFactory::new();
    // }
}
