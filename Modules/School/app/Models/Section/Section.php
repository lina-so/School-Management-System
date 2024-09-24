<?php

namespace Modules\School\Models\Section;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Section/SectionFactory;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','classroom_id','grade_id','capacity','status'];

    // protected static function newFactory(): Section/SectionFactory
    // {
    //     // return Section/SectionFactory::new();
    // }
}
