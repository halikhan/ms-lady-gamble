<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Redeem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function basicInfo()
    // {
    //     return $this->belongsTo(BasicInfo::class, 'user_id_two');
    // }
    //    public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
    // public function basicInfo()
    // {
    //     return $this->hasOne(BasicInfo::class, 'user_id');
    // }
}
