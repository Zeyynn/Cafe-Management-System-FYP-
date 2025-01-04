<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Duwauser extends Authenticatable
{
    use HasFactory;

    protected $table = 'duwauser'; // Specify the table name

    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'password', // Ensure password is included for authentication
        'birthday', 
        'gender', 
        'address', 
        'food', 
        'drink',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function cartItems()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
}
