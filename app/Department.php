<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    public function coAdmins() {
        return $this->belongsTOMany(CoAdmin::class, 'co_admin_id');
    }
}
