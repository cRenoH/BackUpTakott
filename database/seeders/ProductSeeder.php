<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; // <-- Pastikan ini ada

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
                'name'=> 'Workaholic Boxy Fit Tee',
                'category_id'=> 1, // Pastikan ID kategori ini sesuai dengan yang ada di tabel categories
                'description'=> 'Description for Product 1',
                'slug'=> Str::slug('Workaholic Boxy Fit Tee'), // Menggunakan Str::slug untuk membuat slug yang unik
                'status'=> 'available',
                'meta_title'=> 'Meta Title for Product 1',
                'meta_description'=> 'Meta Description for Product 1',
                'shipping_info'=> 'Shipping info for Product 1',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'=> 'Hoodie Mata',
                'category_id'=> 2, // Pastikan ID kategori ini sesuai dengan yang ada di tabel categories
                'description'=> 'Description for Product 2',
                'slug'=> Str::slug('Hoodie Mata'), // Menggunakan Str::slug untuk membuat slug yang unik
                'status'=> 'available',
                'meta_title'=> 'Meta Title for Product 2',
                'meta_description'=> 'Meta Description for Product 2',
                'shipping_info'=> 'Shipping info for Product 2',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ];
        // Masukkan data ke dalam tabel 'products'
        DB::table('products')->insert($products);
    }
}
