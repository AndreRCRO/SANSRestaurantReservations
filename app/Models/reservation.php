<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
    'restaurant_id',
    'customer_name',
    'email',
    'tables',
    'date',
    'time',
];
}
