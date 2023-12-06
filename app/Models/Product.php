<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function categories()
    {
        return $this -> belongsTo(Category::class);
    }

    public function cartitems()
    {
        return $this -> hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this -> hasMany(OrderItem::class);
    }
}
