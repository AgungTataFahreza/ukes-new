<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'logbook_menus';

    protected $fillable = [
        "menu_id",
        "name",
        "keyword",
        "has_view",
        "has_add",
        "has_edit",
        "has_delete",
        "has_upload",
    ];

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'menu_id');
    }

    public function role_permission()
    {
        return $this->hasOne(RolePermission::class, 'menu_id');
    }
}
