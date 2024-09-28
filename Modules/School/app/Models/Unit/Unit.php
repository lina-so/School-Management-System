<?php

namespace Modules\School\Models\Unit;

use Illuminate\Database\Eloquent\Model;
use Modules\School\Models\Subject\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\School\Database\Factories\Unit/UnitFactory;

class Unit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['number','name','subject_id'];

    protected $with = ['subject'];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    // protected static function newFactory(): Unit/UnitFactory
    // {
    //     // return Unit/UnitFactory::new();
    // }
}
