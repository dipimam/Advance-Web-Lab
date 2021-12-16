<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order;

class Product extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasMany(order::class,'p_id','p_id');
    }
}
