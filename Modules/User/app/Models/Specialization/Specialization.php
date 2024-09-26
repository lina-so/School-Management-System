<?php

namespace Modules\User\Models\Specialization;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\Specialization/SpecializationFactory;

class Specialization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    // protected static function newFactory(): Specialization/SpecializationFactory
    // {
    //     // return Specialization/SpecializationFactory::new();
    // }
}
