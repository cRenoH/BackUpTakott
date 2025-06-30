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
            ],
            [
                'product_id' => 2, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU007',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 2, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU008',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 3, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU009',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'S',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 3, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU010',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'M',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 3, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU011',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'L',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 3, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU012',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'XL',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 4, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU013',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'S',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 4, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU014',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'M',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 4, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU015',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 4, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU016',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 5, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU017',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'S',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 5, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU018',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'M',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 5, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU019',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'L',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 5, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU020',
                'price' => 140000,
                'sale_price' => 130000,
                'stock' => 20,
                'size' => 'XL',
                'color_name' => 'Red',
                'color_hex' => '#FF0000',
            ],
            [
                'product_id' => 6, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU021',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'S',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 6, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU022',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'M',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 6, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU023',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 6, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU024',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 7, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU025',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 7, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU026',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 8, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU027',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 8, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU028',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 9, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU029',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 9, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU030',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 10, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU031',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 10, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU032',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 11, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU033',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 11, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU034',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 12, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU035',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 12, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU036',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 13, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU037',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 13, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU038',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 14, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU039',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 14, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU040',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 15, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU041',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'L',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],
            [
                'product_id' => 15, // Pastikan ID produk ini sesuai dengan yang ada di tabel products
                'sku' => 'SKU042',
                'price' => 160000,
                'sale_price' => 150000,
                'stock' => 15,
                'size' => 'XL',
                'color_name' => 'Blue',
                'color_hex' => '#0000FF',
            ],

            // Tambahkan lebih banyak varian produk sesuai kebutuhan
        ];        
        DB::table('product_variants')->insert($productVariants);
    }
}
