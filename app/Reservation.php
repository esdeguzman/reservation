<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function branch() {
        return $this->belongsTo(Branch::class);
    }

    public function trainee() {
        return $this->belongsTo(Trainee::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function paymentConfirmedBy() {
        return $this->belongsTo(User::class, 'payment_confirmed_by');
    }
}
