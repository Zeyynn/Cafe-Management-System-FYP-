<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;

    protected $table = 'duwauser';
    protected $fillable = ['name', 'phone', 'email', 'password'];
}
