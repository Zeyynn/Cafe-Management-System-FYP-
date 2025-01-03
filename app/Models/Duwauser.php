<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duwauser extends Model
{
    use HasFactory;

    protected $table = 'duwauser'; // Specify the table name

    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'birthday', 
        'gender', 
        'address', 
        'food', 
        'drink',
    ];
}
