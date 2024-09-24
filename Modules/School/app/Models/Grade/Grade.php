<?php

namespace Modules\School\Models\Grade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Grade/GradeFactory;

class Grade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    // protected static function newFactory(): Grade/GradeFactory
    // {
    //     // return Grade/GradeFactory::new();
    // }
}
