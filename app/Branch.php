<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;

    public function coAdmins() {
        return $this->hasMany(CoAdmin::class);
    }

    public function courses() {
        return $this->hasMany(BranchCourse::class);
    }
}
