<?php

namespace Modules\User\Models\Religion;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Database\Factories\ReligionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\Religions/ReligionsFactory;

class Religion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return ReligionFactory::new();
    }
}
