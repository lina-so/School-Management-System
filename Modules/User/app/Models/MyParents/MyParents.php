<?php

namespace Modules\User\Models\MyParents;

use Modules\User\Models\Student;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\User\Database\Factories\MyParents/MyParentsFactory;

class MyParents extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'passport_ID',
        'phone',
        'job',
        'address',
        'type',
        'blood_type_id',
        'nationality_id',
        'religion_id',
    ];

       // تشفير الحقول عند التخزين
       public function setPassportIdAttribute($value)
       {
           $this->attributes['passport_ID'] = Crypt::encryptString($value);
       }

       // فك تشفير الحقول عند الاسترجاع
       public function getPassportIdAttribute($value)
       {
           return Crypt::decryptString($value);
       }

       public function student()
       {
           return $this->hasOne(Student::class);
       }

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // protected static function newFactory(): MyParents/MyParentsFactory
    // {
    //     // return MyParents/MyParentsFactory::new();
    // }
}
