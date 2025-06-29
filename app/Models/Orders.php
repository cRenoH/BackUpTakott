<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders'; // Nama tabel yang sesuai di database

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'created_at',
        'updated_at',
    ];

    // Relasi dengan OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
