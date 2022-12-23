<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function carts()
    {
        return $this->hasMany(Cart::class,'order_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class,'order_id');
    }
}
