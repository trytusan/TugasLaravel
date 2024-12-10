<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    // Specify the attributes that are mass-assignable
    protected $fillable = ['name', 'description', 'price_per_day', 'path', 'image'];
}
