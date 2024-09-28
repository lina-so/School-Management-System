<?php

namespace Modules\School\Models\Grade;

use Illuminate\Database\Eloquent\Model;
use Modules\School\Models\Section\Section;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Grade/GradeFactory;

class Grade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }

    public function sections(){
        return $this->hasMany(Section::class);
    }

    // protected static function newFactory(): Grade/GradeFactory
    // {
    //     // return Grade/GradeFactory::new();
    // }
}
