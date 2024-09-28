<?php

namespace Modules\School\Models\Classroom;

use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Classroom/ClassroomFactory;

class Classroom extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','grade_id'];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    // protected static function newFactory(): Classroom/ClassroomFactory
    // {
    //     // return Classroom/ClassroomFactory::new();
    // }
}
