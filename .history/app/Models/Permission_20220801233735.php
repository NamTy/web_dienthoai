<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function permissionChildrent()
    {
        return $this->hasMany(Role::class,'parent_id');
    }
}
