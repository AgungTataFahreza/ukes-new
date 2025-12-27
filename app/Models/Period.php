<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ukes_periods';
    protected $fillable = [
        'name',
        'year_id',
        'is_active'
    ];

    public function year()
    {
        return $this->belongsTo(Year::class, 'year_id', 'id');
    }
}
