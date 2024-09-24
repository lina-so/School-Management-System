<?php

namespace Modules\School\Models\Assignment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Assignment/AssignmentFactory;

class Assignment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): Assignment/AssignmentFactory
    // {
    //     // return Assignment/AssignmentFactory::new();
    // }
}
