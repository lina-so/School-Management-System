<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\SectionTeacher/SectionTeacherFactory;

class SectionTeacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    protected $fillable = ['section_id','teacher_id'];


    // protected static function newFactory(): SectionTeacher/SectionTeacherFactory
    // {
    //     // return SectionTeacher/SectionTeacherFactory::new();
    // }
}
