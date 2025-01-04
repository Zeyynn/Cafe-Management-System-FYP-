<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_name', 'item_price', 'quantity'];

    public function user()
    {
    return $this->belongsTo(Duwauser::class, 'user_id');
    }
}