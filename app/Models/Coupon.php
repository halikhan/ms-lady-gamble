<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coupon extends Model
{
    use HasFactory;
    public function gift()
    {
        return $this->hasMany(Gift::class,'coupon_id');
    }
    public function remainGifts()
    {
        return $this->hasMany(Gift::class,'coupon_id')->where('status',Gift::REMAIN);
    }
    /**
     * The roles that belong to the Coupon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
    }
}
