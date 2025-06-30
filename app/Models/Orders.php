<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mendefinisikan bahwa sebuah pesanan memiliki banyak item.
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }


}
