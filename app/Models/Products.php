<?php

namespace App\Models;

use Illuminate\Support\Arr;
use App\Models\ProductVariants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Simulasi database produk
// Dalam aplikasi nyata, ini akan diambil dari database menggunakan ORM seperti Eloquent.


class Products extends Model //tabel products
{
    use HasFactory;
    protected $table = 'products'; // Nama tabel yang sesuai di database
    
    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }
    public function primaryImage()
    {
        return $this->hasOne(ProductImages::class, 'product_id')->where('is_primary', true);
    }
    public function variants(): HasMany
    {
        // 'product_id' adalah foreign key di tabel product_variants
        return $this->hasMany(ProductVariants::class, 'product_id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
     public function reviews()
    {
        return $this->hasMany(Reviews::class, 'product_id');
    }
    public function getRatingAttribute()
    {
        // Menghitung rata-rata dari kolom 'rating' pada review yang sudah di 'Approved'
        return $this->reviews()->where('status', 'Approved')->avg('rating');
    }
   

    protected $casts = [
        'date' => 'date', // Menggunakan tipe data tanggal untuk kolom date
        'price' => 'integer', // Menggunakan tipe data integer untuk harga
    ];

    
}