<?php

namespace Modules\School\Models;

use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\Teacher\Teacher;
use Modules\School\Models\Section\Section;
use Modules\School\Models\Subject\Subject;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Quizze/QuizzeFactory;

class Quizze extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public $translatable = ['name'];

    protected $with = ['teacher','subject','grade','classroom','section'];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }


    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }


    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }


    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    // protected static function newFactory(): Quizze/QuizzeFactory
    // {
    //     // return Quizze/QuizzeFactory::new();
    // }
}
