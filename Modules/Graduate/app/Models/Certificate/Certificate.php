<?php

namespace Modules\Graduate\Models\Certificate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Graduate\Database\Factories\Certificate/CertificateFactory;

class Certificate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['certificate_ID', 'certificate_name', 'institution_name', 'issue_date',
    'expiration_date', 'Score', 'description', 'certificate_file', 'grade_id', 'classroom_id', 'student_id'];


    // protected static function newFactory(): Certificate/CertificateFactory
    // {
    //     // return Certificate/CertificateFactory::new();
    // }
}
