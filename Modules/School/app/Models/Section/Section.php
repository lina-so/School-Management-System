<?php

namespace Modules\School\Models\Section;

use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\Teacher\Teacher;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Section/SectionFactory;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','classroom_id','grade_id','capacity','status'];

    protected $with = ['grade','classroom','teachers'];
    
    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    // protected static function newFactory(): Section/SectionFactory
    // {
    //     // return Section/SectionFactory::new();
    // }
}
