<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'name', 
        'user_id'
    ];

    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
