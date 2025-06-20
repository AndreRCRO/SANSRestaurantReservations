<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'description',
        'number_tables',
        'password',
        'free_tables',
        'reservations_count',
    ];

    protected $hidden = [
        'password',
    ];
}
