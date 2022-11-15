<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\category');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\brand');
    }
}
