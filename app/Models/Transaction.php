<?php

namespace App\Models;

use App\Models\Receipt;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function receipt()
    {
        $this->hasMany(Receipt::class);
    }
}
