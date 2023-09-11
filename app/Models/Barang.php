<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category', 'user'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'barang_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'barang_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }



}