<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Donation;

class Donor extends Model
{
    use HasFactory;

    public function review()
    {
        return $this->hasMany(Review::class,'reviewer_id','d_id');
    }

    public function donation()
    {
        return $this->hasMany(Donation::class,'d_id','d_id');
    }
}
