<?php

namespace Modules\User\Models\BloodType;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Database\Factories\BloodTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\BloodType/BloodTypeFactory;

class BloodType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return BloodTypeFactory::new();
    }
}

