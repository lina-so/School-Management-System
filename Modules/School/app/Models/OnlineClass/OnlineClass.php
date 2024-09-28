<?php

namespace Modules\School\Models;

use Modules\User\Models\Student;
use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Modules\School\Models\Section\Section;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\OnlineClass/OnlineClassFactory;

class OnlineClass extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    public $fillable= ['integration','Grade_id','Classroom_id','section_id',
    'meeting_id','topic','start_at','duration','password','start_url','join_url'];

    protected $with = ['students','section','classroom','grade'];

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

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // protected static function newFactory(): OnlineClass/OnlineClassFactory
    // {
    //     // return OnlineClass/OnlineClassFactory::new();
    // }
}
