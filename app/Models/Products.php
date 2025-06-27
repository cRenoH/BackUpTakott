<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// Simulasi database produk
// Dalam aplikasi nyata, ini akan diambil dari database menggunakan ORM seperti Eloquent.


class Products extends Model //tabel products
{
    protected $table = 'products'; // Nama tabel yang sesuai di database
    
    protected $casts = [
        'variant_color' => 'array', // Menggunakan array untuk menyimpan beberapa warna
        'rating' => 'array', // Menggunakan array untuk menyimpan rating
        'date' => 'date', // Menggunakan tipe data tanggal untuk kolom date
    ];
}