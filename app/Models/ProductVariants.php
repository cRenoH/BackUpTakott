<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    protected $table = "product_variants"; // Nama tabel yang sesuai di database
    protected $fillable = [
        'product_id',
        'sku',
        'price',
        'sale_price',
        'stock',
        'size',
        'color_name',
        'color_hex',
    ];
    // Definisikan relasi dengan model Product jika diperlukan
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
    protected $casts = [
        'price' => 'integer', // Menggunakan tipe data integer untuk harga
        'sale_price' => 'integer', // Menggunakan tipe data integer untuk harga diskon
        'stock' => 'integer', // Menggunakan tipe data integer untuk stok
    ];
     public $timestamps = false;
}
