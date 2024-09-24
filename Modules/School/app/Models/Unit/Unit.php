<?php

namespace Modules\School\Models\Unit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Unit/UnitFactory;

class Unit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['number','name','subject_id'];


    // protected static function newFactory(): Unit/UnitFactory
    // {
    //     // return Unit/UnitFactory::new();
    // }
}
