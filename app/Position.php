<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use SoftDeletes;

    public function coAdmins() {
        return $this->hasMany(CoAdmin::class);
    }
}
