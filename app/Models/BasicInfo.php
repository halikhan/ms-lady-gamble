<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'basic_infos';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    // public function redeem()
    // {
    //     return $this->hasMany(Redeem::class);
    // }

}
