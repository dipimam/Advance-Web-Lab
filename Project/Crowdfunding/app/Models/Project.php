<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Initiator;
use App\Models\Review;
use App\Models\Donation;

class Project extends Model
{
    use HasFactory;

    public function initiator()
    {
        return $this->belongsTo(Initiator::class,'i_id','i_id');
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
