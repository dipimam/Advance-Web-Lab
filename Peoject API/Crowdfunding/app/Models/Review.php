<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\Donor;

class Review extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class,'p_id','p_id');
    }
    public function donor()
    {
        return $this->belongsTo(Donor::class,'reviewer_id','d_id');
    }
}
