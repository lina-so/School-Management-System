<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\ClassroomTeacher/ClassroomTeacherFactory;

class ClassroomTeacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['classroom_id','teacher_id'];

    // protected static function newFactory(): ClassroomTeacher/ClassroomTeacherFactory
    // {
    //     // return ClassroomTeacher/ClassroomTeacherFactory::new();
    // }
}
