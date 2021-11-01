<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Initiator;

class Authentication extends Model
{
    use HasFactory;
    public function initiator()
    {
        return $this->belongsTo(Initiator::class,'a_email','i_email');
    }
}
