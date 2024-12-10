<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $fillable = [
        'user_id', 
        'product_id', 
        'quantity', 
        'subtotal'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id'); 
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); 
    }
}
