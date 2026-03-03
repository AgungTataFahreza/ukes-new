<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'ukes_applicants';
    protected $fillable = [
        'applicant_medical_record_id',
        'username',
        'password',
        'name',
        'last_login'
    ];

    protected $hidden = ['password'];

    public function medical_record()
    {
        return $this->belongsTo(ApplicantMedicalRecord::class, 'applicant_medical_record_id');
    }
}
