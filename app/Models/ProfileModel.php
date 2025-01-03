<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuwaUser extends Model
{
    use HasFactory;

    protected $table = 'duwauser';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'birthday',
        'gender',
        'address',
        'food',
        'drink',
    ];
}
