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
                'id' => 1,
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU001',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'M',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'id' => 2,
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU002',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'L',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'id' => 3,
                'product_id' => 1, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU003',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'XL',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            // Tambahkan lebih banyak varian produk sesuai kebutuhan
        ];        
        DB::table('product_variants')->insert($productVariants);
    }
}
