<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->hasMany(Project::class,'i_id','id');
    }
}
