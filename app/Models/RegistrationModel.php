<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegistrationModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'duwauser';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];
}
