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
        'last_login',

        // Semua field medis
        'tinggi_badan',
        'berat_badan',
        'tekanan_darah_sistolik',
        'tekanan_darah_diastolik',
        'nadi',
        'status_antropometri',
        'catatan_antropometri',
        'keterangan_antropometri',
        'status_kulit',
        'catatan_kulit',
        'keterangan_kulit',
        'status_mata',
        'visus',
        'buta_warna',
        'catatan_mata',
        'keterangan_mata',
        'status_telinga',
        'telinga_kanan',
        'telinga_kiri',
        'catatan_telinga',
        'keterangan_telinga',
        'status_hidung',
        'catatan_hidung',
        'keterangan_hidung',
        'status_lidah',
        'catatan_lidah',
        'keterangan_lidah',
        'status_pharynx',
        'catatan_pharynx',
        'keterangan_pharynx',
        'status_tonsil',
        'catatan_tonsil',
        'keterangan_tonsil',
        'status_thyroid',
        'catatan_thyroid',
        'keterangan_thyroid',
        'status_jantung',
        'catatan_jantung',
        'keterangan_jantung',
        'status_paru_paru',
        'catatan_paru_paru',
        'keterangan_paru_paru',
        'status_abdomen',
        'catatan_abdomen',
        'keterangan_abdomen',
        'status_refleks_pupil',
        'status_refleks_patela',
        'status_refleks_achiles',
        'catatan_refleks',
        'keterangan_refleks',
        'status_thorax',
        'catatan_thorax',
        'keterangan_thorax',
        'status_kemampuan_bicara',
        'catatan_kemampuan_bicara',
        'keterangan_kemampuan_bicara',
        'status_gigi',
        'catatan_gigi',
        'keterangan_gigi',
        'amp',
        'mop',
        'thc',

        // Staging Data
        'file_kesehatan',
        'file_narkoba',
        'status_file_kesehatan',
        'status_file_narkoba',
        'tanggal_input',
        'tanggal_verifikasi'
    ];

    protected $hidden = ['password'];

    public function medical_record()
    {
        return $this->belongsTo(ApplicantMedicalRecord::class, 'applicant_medical_record_id');
    }
}
