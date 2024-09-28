<?php

namespace Modules\Graduate\Models\Promotion;

use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Eloquent\Model;
use Modules\School\Models\Section\Section;
use Modules\School\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Graduate\Database\Factories\Promotion/PromotionsFactory;

class Promotions extends Model
{
    use HasFactory;

    protected $fillable=['student_id','from_grade','to_grade','from_classroom','to_classroom','from_section','to_section'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }


    public function f_grade()
    {
        return $this->belongsTo(Grade::class, 'from_grade');
    }


    public function f_classroom()
    {
        return $this->belongsTo(Classroom::class, 'from_classroom');
    }


    public function f_section()
    {
        return $this->belongsTo(Section::class, 'from_section');
    }


    public function t_grade()
    {
        return $this->belongsTo(Grade::class, 'to_grade');
    }



    public function t_classroom()
    {
        return $this->belongsTo(Classroom::class, 'to_classroom');
    }


    public function t_section()
    {
        return $this->belongsTo(Section::class, 'to_section');
    }



}

