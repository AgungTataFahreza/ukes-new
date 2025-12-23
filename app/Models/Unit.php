<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'logbook_units';

    protected $fillable = [
        'name',
        'jurusan',
        'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'unit_id', 'id');
    }
}
