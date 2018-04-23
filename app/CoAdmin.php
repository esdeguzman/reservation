<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoAdmin extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function position() {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
