<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authentication;
use App\Models\Project;

class Initiator extends Model
{
    use HasFactory;
    public function authentication()
    {
        return $this->hasOne(Authentication::class,'a_email','i_email');
    }

    public function project()
    {
        return $this->hasMany(Project::class,'i_id','i_id');
    }
}
