<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;
    protected $table = 'ukes_role_permissions';

    protected $fillable = [
        'role_id',
        'menu_id',
        'view_access',
        'add_access',
        'edit_access',
        'delete_access',
        'upload_access'
    ];
}
