<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $table = 'order_items'; // Nama tabel yang sesuai di database

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'created_at',
        'updated_at',
    ];
    public function order(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }

    /**
     * Mendefinisikan bahwa sebuah item pesanan merujuk ke satu varian produk.
     */
    public function variant(): BelongsTo
    {
        return $this->belongsTo(ProductVariants::class, 'variant_id');
    }

    // public function order()
    // {
    //     return $this->belongsTo(Order::class);
    // }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
