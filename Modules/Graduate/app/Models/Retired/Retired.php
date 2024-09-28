<?php

namespace Modules\Graduate\Models\Retired;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Graduate\Database\Factories\Retired/RetiredFactory;

class Retired extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    protected $table = 'retired';

    // protected static function newFactory(): Retired/RetiredFactory
    // {
    //     // return Retired/RetiredFactory::new();
    // }
}
