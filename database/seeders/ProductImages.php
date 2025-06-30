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
                'product_id' => 1,
                'image_path' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
                'is_primary' => true,
            ],
            [
                'product_id' => 1,
                'image_path' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - BACK.png',
                'is_primary' => false,
            ],
            [
                'product_id' => 2,
                'image_path' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - BACK.png',
                'is_primary' => true,
            ],
            [
                'product_id' => 2,
                'image_path' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
                'is_primary' => false,
            ],
            // Tambahkan lebih banyak gambar produk sesuai kebutuhan
        ];
        DB::table('product_images')->insert($productImages);
        // Jika Anda ingin menambahkan lebih banyak gambar, cukup tambahkan ke array $productImages
    }
}
