<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name', 
        'address', 
        'payment_method', 
        'order_total'
    ];

    protected $casts = [
        'order_total' => 'decimal:2',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'user_id'); 
    }
}
