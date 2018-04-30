<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainee extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
