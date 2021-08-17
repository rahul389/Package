<?php

namespace Mod\Role\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function roles() {
        return $this->belongsToMany('Mod\Role\Models\Role');
    }
}
