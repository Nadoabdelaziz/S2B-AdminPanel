<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'dist',
        'dist2',

        'deal',
        'deal2',

        'users',
        'users2',

        'roles',
        'roles2'


    ];
}
