<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Pastikan ini ada
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        // Hapus data lama agar tidak ada duplikat saat seeding ulang
        DB::table('products')->truncate();

        // Data produk yang akan kita masukkan
        $products = [
            [
                'id'=> 1,
                'name'=> 'Product 1',
                'category_id'=> 1, // Pastikan ID kategori ini sesuai dengan yang ada di tabel categories
                'description'=> 'Description for Product 1',
                'slug'=> 'product-1',
                'status'=> 'available',
                'meta_title'=> 'Meta Title for Product 1',
                'meta_description'=> 'Meta Description for Product 1',
                'shipping_info'=> 'Shipping info for Product 1',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ];
        // Masukkan data ke dalam tabel 'products'
        DB::table('products')->insert($products);
    }
}
