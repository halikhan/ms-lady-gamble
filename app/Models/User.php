<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
        'password',
        'remember_token',
    ];
    const PENDING = 1;
    const APPROVED = 2;
    const REJECTED = 3;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
    public function purchaseCoupon()
    {
        return $this->belongsToMany(Coupon::class,user_coupon::class,'user_id','coupon_id');
    }
    public function basicInfo()
    {
        return $this->hasOne(BasicInfo::class,'user_id');
    }
    public function package()
    {
        return $this->hasMany('App\Models\Package');
    }

    public function star_ratings()
    {
        return $this->hasMany('App\Models\StarRating');
    }

    public function user_videos()
    {
        return $this->hasMany('App\Models\UserVideo');
    }

    public function hudl_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'HUDL');
    }

    public function camp_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'CAMP');
    }

    public function training_user_videos()
    {
        return $this->hasMany('App\Models\UserVideo')->where('category', 'TRAINING');
    }

    public function redeem()
    {
        return $this->hasMany(Redeem::class,'user_id');
    }
}
