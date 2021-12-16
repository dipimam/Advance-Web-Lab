<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Donor;
use App\Models\Project;


class Donation extends Model
{
    use HasFactory;

    
    public function porject()
    {
        return $this->belongsTo(Project::class,'p_id','p_id');
    }

    public function donor()
    {
        return $this->belongsTo(Donor::class,'d_id','d_id');
    }
}
