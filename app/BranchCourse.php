<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchCourse extends Model
{
    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function branches() {
        return $this->belongsTo(Branch::class);
    }
}
