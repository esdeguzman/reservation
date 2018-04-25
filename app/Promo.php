<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function course() {
        return $this->belongsTo(BranchCourse::class, 'branch_course_id');
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
