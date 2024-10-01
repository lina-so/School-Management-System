<?php

namespace Modules\User\Models\Student;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\MyParents\MyParents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\Student/StudentFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        // Authentication
        'email',
        'password',

        // Personal Info
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'date_of_birth',

        // Foreign Keys
        'blood_type_id',
        'nationality_id',
        'religion_id',

        // Contact Info
        'phone_number',
        'address',
        'city',
        'state',
        'postal_code',
        'country',

        // Educational Information
        'enrollment_date',
        'graduation_date',
        'grade_id',
        'classroom_id',
        'section_id',

        // Status
        'status',
    ];
    protected $with = ['student_parent'];

    public function student_parent()
    {
        return $this->belongsTo(MyParents::class);
    }

    public function getFullStudentNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }


    public function getDateOfBirthAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }


    public function getEnrollmentDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }


    public function getGraduationDateAttribute($value)
    {
        if (is_null($value)) {
            return "the student hasn't graduated yet";
        }
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }


    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // protected static function newFactory(): Student/StudentFactory
    // {
    //     // return Student/StudentFactory::new();
    // }
}
