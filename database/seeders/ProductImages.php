<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->truncate();

        $productImages = [
            [
                'id' => 1,
                'product_id' => 1,
                'image_path' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
                'is_primary' => true,
            ],
            // Tambahkan lebih banyak gambar produk sesuai kebutuhan
        ];
        DB::table('product_images')->insert($productImages);
        // Jika Anda ingin menambahkan lebih banyak gambar, cukup tambahkan ke array $productImages
    }
}
