<?php

namespace Modules\School\Models\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Subject/SubjectFactory;

class Subject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','classroom_id','grade_id','teacher_id','status'];


    // protected static function newFactory(): Subject/SubjectFactory
    // {
    //     // return Subject/SubjectFactory::new();
    // }
}

