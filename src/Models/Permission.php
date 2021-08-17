<?php

namespace Module\Role\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function roles() {
        return $this->belongsToMany('Module\Role\Models\Role');
    }
}
