<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'name',
        'price',
        'category',
    ];

    public function cartItems()
    {
    return $this->hasMany(Cart::class);
    }
    
}