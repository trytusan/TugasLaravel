<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    // Specify the attributes that are mass-assignable
    protected $fillable = ['name', 'description', 'price', 'image'];

}
