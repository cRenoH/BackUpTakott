<?php

namespace App\Models;

use Illuminate\Support\Arr;

// Simulasi database produk
// Dalam aplikasi nyata, ini akan diambil dari database menggunakan ORM seperti Eloquent.


class Shop
{
    public static function all()
    {

        $product_database = [
    [
        'id' => 1,
        'name' => 'Boxy Fit Tee - [Workaholic]',
        'price' => '199.000',
        'rating' => [5.0],
        'color' => 'Black',
        'image' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
        'date' => '20231001',
        'data-color' => 'Black',
        'setbg' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
        'variant-color' => ['#000000', '#003b87', '#ffffff'],
        'active-color' => '#000000',
        'category' => 'T-Shirt'
    ],
    [
        'id' => 2,
        'name' => 'Hoodie - [Mata]',
        'price' => '399.000',
        'rating' => [3.7],
        'color' => 'Black',
        'image' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
        'date' => '20230915',
        'data-color' => 'black white',
        'setbg' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
        'variant-color' => ['#000000', '#ffffff'],
        'active-color' => '#000000',
        'category' => 'T-Shirt'
    ],
    [
        'id' => 3,
        'name' => 'Crewneck [DRMTSTD]',
        'price' => '249.000',
        'rating' => [4.0],
        'color' => 'Black',
        'image' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
        'date' => '20230820',
        'data-color' => 'white',
        'setbg' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
        'variant-color' => ['#000000', 'linear-gradient(to right, #000 50%, #b13d47 50%)'],
        'active-color' => '#000000',
        'category' => 'boxy tree'
    ]
];
        // Di sini kita mengembalikan data produk sebagai array.
        // Dalam aplikasi nyata, Anda akan menggunakan Eloquent untuk mengambil data dari database.
        return $product_database;
    }

    public static function find($id): array
    {
        $post =  Arr::first(static::all(), fn ($product) => $product['id'] == $id) ?? null; 

        if (!$post) {
            abort(404, 'Product not found');
        }
        return $post;
    }
}