<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['name','display_name','parent_id','key_code']
    public function permissionChildrent()
    {
        return $this->hasMany(Permission::class,'parent_id');
    }
}
