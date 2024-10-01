<?php

namespace Modules\School\Models\Subject;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\Teacher\Teacher;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Subject/SubjectFactory;

class Subject extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','classroom_id','grade_id','teacher_id','status'];


    protected $with = ['grade','classroom','teacher'];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }


    // protected static function newFactory(): Subject/SubjectFactory
    // {
    //     // return Subject/SubjectFactory::new();
    // }
}

