<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin() {
        return $this->hasOne(Admin::class);
    }

    public function coAdmins() {
        return $this->hasMany(CoAdmin::class);
    }

    public function addedBranchCourses() {
        return $this->hasMany(BranchCourse::class, 'added_by');
    }

    public function deletedBranchCourses() {
        return $this->hasMany(BranchCourse::class, 'deleted_by');
    }

    public function addedPromos() {
        return $this->hasMany(Promo::class, 'added_by');
    }

    public function deletedPromos() {
        return $this->hasMany(Promo::class, 'deleted_by');
    }
}
