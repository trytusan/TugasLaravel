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

    public function scopeFilterPrice($query, $priceRange)
    {
        if ($priceRange) {
            $priceRangeArray = explode('-', $priceRange);

            if (count($priceRangeArray) === 2 && is_numeric($priceRangeArray[0]) && is_numeric($priceRangeArray[1])) {
                $query->whereBetween('price_per_day', [(int) $priceRangeArray[0], (int) $priceRangeArray[1]]);
            } elseif (count($priceRangeArray) === 1 && is_numeric($priceRangeArray[0])) {
                $query->where('price_per_day', '>=', (int) $priceRangeArray[0]);
            }
        }

        return $query;
    }

    // Scope for searching by name
    public function scopeSearch($query, $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
