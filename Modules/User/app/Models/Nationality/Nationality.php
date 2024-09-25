<?php

namespace Modules\User\Models\Nationality;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\Factories\NationalityFactory;
// use Modules\User\Database\Factories\Nationalities/NationalitiesFactory;

class Nationality extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return NationalityFactory::new();
    }
}
