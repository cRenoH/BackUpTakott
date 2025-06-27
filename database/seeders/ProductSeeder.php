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
                'name' => 'Boxy Fit Tee - [Workaholic]',
                'price' => 199,
                'rating' => json_encode([5]), // Diubah menjadi format JSON
                'color' => 'Black',
                'image' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
                'date' => '2023-10-01',
                'setbg' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
                'variant_color' => json_encode(['#000000', '#003b87', '#ffffff']), // Diubah menjadi format JSON
                'active_color' => '#000000',
                'category' => 'T-Shirt',
                'data_color' => 'Black',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hoodie - [Mata]',
                'price' => 399,
                'rating' => json_encode([3.7]), // Diubah menjadi format JSON
                'color' => 'Black',
                'image' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
                'date' => '2023-09-15',
                'setbg' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
                'variant_color' => json_encode(['#000000', '#ffffff']), // Diubah menjadi format JSON
                'active_color' => '#000000',
                'category' => 'Hoodie',
                'data_color' => 'black white',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Crewneck [DRMTSTD]',
                'price' => 249,
                'rating' => json_encode([4]), // Diubah menjadi format JSON
                'color' => 'Black',
                'image' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
                'date' => '2023-08-20',
                'setbg' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
                'variant_color' => json_encode(['#000000', 'linear-gradient(to right, #000 50%, #b13d47 50%)']),
                'active_color' => '#000000',
                'category' => 'Crewneck',
                'data_color' => 'white',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        // Masukkan data ke dalam tabel 'products'
        DB::table('products')->insert($products);
    }
}
