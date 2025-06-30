<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductVariants extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product_variants")->truncate();
        $productVariants = [
            [
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU001',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'S',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU002',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'M',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU003',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'L',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU004',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'XL',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 2, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU005',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'S',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 2, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU006',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'M',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ]
            // Tambahkan lebih banyak varian produk sesuai kebutuhan
        ];        
        DB::table('product_variants')->insert($productVariants);
    }
}
