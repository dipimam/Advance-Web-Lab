<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Userinfo;
use App\Models\Review;
use App\Models\Donation;

class Project extends Model
{
    use HasFactory;

    public function userinfo()
    {
        return $this->belongsTo(Userinfo::class,'i_id','id');
    }

    public function review()
    {
        return $this->hasMany(Review::class,'p_id','p_id');
    }
    public function donation()
    {
        return $this->hasMany(Donation::class,'p_id','p_id');
    }
}
