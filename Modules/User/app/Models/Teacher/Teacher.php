<?php

namespace Modules\User\Models\Teacher;

use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Modules\School\Models\Section\Section;
use Modules\School\Models\Subject\Subject;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\Teacher/TeacherFactory;

class Teacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'first_name',
        'last_name',

        'gender',
        'date_of_birth',
        'phone_number',

        'email',
        'password',
        'address',

        'hire_date',
        'retired_date',
        'job_title',
        'experience_years',
        'salary',

        'education_level',
        'employment_type',
        'status',

        'blood_type_id',
        'nationality_id',
        'religion_id',

        'grade_id',
        'specialization_id'
    ];
    protected $with = ['subjects','sections','classrooms','grades'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // protected static function newFactory(): Teacher/TeacherFactory
    // {
    //     // return Teacher/TeacherFactory::new();
    // }
}
