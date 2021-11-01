<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
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
