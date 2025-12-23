<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */

    protected $table = 'logbook_users';

    protected $fillable = [
        'name',
        'user_type_id',
        'username',
        'password',
        'role_id',
        'nama_gabung',
        'nama',
        'nip_lama',
        'nip',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'golongan_pangkat',
        'tmt_pangkat',
        'nama_jabatan',
        'kelas_jabatan',
        'tmt_jabatan',
        'tahun_masa_kerja_jabatan',
        'bulan_masa_kerja_jabatan',
        'eselon',
        'tmt_cpns',
        'tahun_masa_kerja',
        'bulan_masa_kerja',
        'tahun_usia',
        'bulan_usia',
        'nama_latihan_jabatan_struktural',
        'tahun_latihan_jabatan_struktural',
        'nama_pendidikan',
        'tahun_lulus_pendidikan',
        'tingkat_ijazah_pendidikan',
        'pak_integrasi',
        'user_id',
        'grade',
        'serdos',
        'jabatan_internal',
        'kode_jabatan_internal',
        'kode_lokasi',
        'jurusan',
        'internal_position_id',
        'kode_ptkp',
        'ptkp_id',
        'index',
        'no_rekening',
        'gelar_depan',
        'gelar_belakang',
        'email',
        'status_aktif',
        'unit_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function user_type()
    {
        return $this->belongsTo(UserType::class, 'user_type_id', 'id');
    }

    public function superior()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subordinates()
    {
        return $this->hasMany(User::class, 'user_id')->orderBy('nama');
    }

    public  function behavior_score()
    {
        return $this->hasOne(BehaviorScore::class, 'user_id');
    }

    public  function attendance()
    {
        return $this->hasOne(Attendance::class, 'user_id');
    }

    public  function attendances()
    {
        return $this->hasMany(Attendance::class, 'user_id');
    }

    public function gross_salaries()
    {
        return $this->hasMany(GrossSalary::class, 'user_id');
    }

    public function gross_salary()
    {
        return $this->hasOne(GrossSalary::class, 'user_id');
    }

    public function internal_position()
    {
        return $this->belongsTo(InternalPosition::class, 'internal_position_id', 'id');
    }

    public function ptkp()
    {
        return $this->belongsTo(PTKP::class, 'ptkp_id', 'id');
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class, 'user_id');
    }

    public function deductionDonasi()
    {
        return $this->deductions()->where('name', 'Donasi');
    }

    public function deductionPoltekmart()
    {
        return $this->deductions()->where('name', 'Poltekmart');
    }

    public function logbooks()
    {
        return $this->hasMany(Logbook::class, 'user_id');
    }

    public function logbooksValidated()
    {
        return $this->hasMany(Logbook::class, 'user_id')->where('is_validated', 1);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function jur()
    {
        return $this->belongsTo(Unit::class, 'jurusan', 'jurusan');
    }

    public function logbook_percentage()
    {
        return $this->hasOne(LogbookPercentage::class, 'user_id');
    }
}
