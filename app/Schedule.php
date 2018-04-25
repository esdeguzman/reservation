<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function addedBy() {
        return $this->belongsTo(CoAdmin::class, 'added_by');
    }

    public function deletedBy() {
        return $this->belongsTo(CoAdmin::class, 'deleted_by');
    }

    public function branchCourse() {
        return $this->belongsTo(BranchCourse::class);
    }

    public function promo() {
        return $this->hasOne(Promo::class);
    }
}
