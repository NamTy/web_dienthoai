<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'display_name'];
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permissions_role','role_id','permissions_id');
    }
}
