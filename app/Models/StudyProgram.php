<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyProgram extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ukes_study_programs';

    protected $fillable = [
        'name'
    ];

    public function applicant()
    {
        return $this->hasMany(ApplicantMedicalRecord::class, 'study_program_id', 'id');
    }
}
