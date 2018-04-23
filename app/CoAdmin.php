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
        return $this->hasOne(Role::class);
    }

    public function department() {
        return $this->hasOne(Department::class);
    }

    public function branch() {
        return $this->hasOne(Branch::class);
    }

    public function position() {
        return $this->hasOne(Position::class);
    }
}
