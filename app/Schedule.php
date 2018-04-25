<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function coAdmin() {
        return $this->belongsTo(CoAdmin::class);
    }

    public function branchCourse() {
        return $this->belongsTo(BranchCourse::class);
    }

    public function promo() {
        return $this->hasOne(Promo::class);
    }
}
