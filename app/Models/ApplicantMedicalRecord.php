<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicantMedicalRecord extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ukes_applicant_medical_records';
    protected $fillable = [
        "period_id",
        "nomor_peserta",
        "nama",
        "jenis_kelamin",
        "study_program_id",
        "tanggal_lahir",
        "tgl_registrasi",
        "tgl_periksa",
        "status_bayar",
        "tempat_periksa",
        "petugas_registrasi_id",
        "dokter_id",
        "paramedis_1_id",
        "tinggi_badan",
        "berat_badan",
        "tekanan_darah_sistolik",
        "tekanan_darah_diastolik",
        "nadi",
        "status_antropometri",
        "catatan_antropometri",
        "keterangan_antropometri",
        "paramedis_2_id",
        "status_kulit",
        "catatan_kulit",
        "keterangan_kulit",
        "status_mata",
        "visus",
        "buta_warna",
        "catatan_mata",
        "keterangan_mata",
        "status_telinga",
        "telinga_kanan",
        "telinga_kiri",
        "catatan_telinga",
        "keterangan_telinga",
        "status_hidung",
        "catatan_hidung",
        "keterangan_hidung",
        "status_lidah",
        "catatan_lidah",
        "keterangan_lidah",
        "status_pharynx",
        "catatan_pharynx",
        "keterangan_pharynx",
        "status_tonsil",
        "catatan_tonsil",
        "keterangan_tonsil",
        "paramedis_3_id",
        "status_thyroid",
        "catatan_thyroid",
        "keterangan_thyroid",
        "status_jantung",
        "catatan_jantung",
        "keterangan_jantung",
        "status_paru_paru",
        "catatan_paru_paru",
        "keterangan_paru_paru",
        "status_abdomen",
        "catatan_abdomen",
        "keterangan_abdomen",
        "status_refleks_pupil",
        "status_refleks_patela",
        "status_refleks_achiles",
        "catatan_refleks",
        "keterangan_refleks",
        "status_thorax",
        "catatan_thorax",
        "keterangan_thorax",
        "status_kemampuan_bicara",
        "catatan_kemampuan_bicara",
        "keterangan_kemampuan_bicara",
        "status_gigi",
        "catatan_gigi",
        "keterangan_gigi",
        "dokter_gigi_id",
        "perawat_gigi_id",
        "amp",
        "mop",
        "thc",
        "petugas_narkoba_id",
        "riwayat_penyakit",
        "kesimpulan",
        "rekomendasi"
    ];

    public function study_program()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function petugas_registrasi()
    {
        return $this->belongsTo(User::class, 'petugas_registrasi_id');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }

    public function paramedis_1()
    {
        return $this->belongsTo(User::class, 'paramedis_1_id');
    }

    public function paramedis_2()
    {
        return $this->belongsTo(User::class, 'paramedis_2_id');
    }

    public function paramedis_3()
    {
        return $this->belongsTo(User::class, 'paramedis_3_id');
    }

    public function dokter_gigi()
    {
        return $this->belongsTo(User::class, 'dokter_gigi_id');
    }

    public function perawat_gigi()
    {
        return $this->belongsTo(User::class, 'perawat_gigi_id');
    }

    public function petugas_narkoba()
    {
        return $this->belongsTo(User::class, 'petugas_narkoba_id');
    }

    public function applicant()
    {
        // Karena foreign key (applicant_medical_record_id) ada di tabel Applicant
        return $this->hasOne(Applicant::class, 'applicant_medical_record_id', 'id');
    }
}
