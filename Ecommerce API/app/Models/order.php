<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class order extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class,'p_id','p_id');
    }
}
