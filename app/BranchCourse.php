<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchCourse extends Model
{
    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function branch() {
        return $this->belongsTo(Branch::class);
    }

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }
}
