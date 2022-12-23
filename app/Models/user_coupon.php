<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class user_coupon extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'user_coupons';

   /**
    * Get the user associated with the user_coupon
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function coupon(): HasMany
   {
       return $this->hasMany(Gift::class, 'coupon_id','coupon_id');
   }

}
