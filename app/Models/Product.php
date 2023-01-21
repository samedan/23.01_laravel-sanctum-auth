<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Permit adding data
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
    ];
}
