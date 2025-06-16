<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing',  );
});

Route::get('about', function () {
    return view('about');
});

Route::get('admin', function () {
    return view('blade');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('customer-service', function () {
    return view('customer-service(Opsional)');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('invoice', function () {
    return view('invoice');
});

Route::get('login', function () {
    return view('login');
});

Route::get('payment', function () {
    return view('payment');
});

Route::get('product-detail', function () {
    return view('product-details');
});



Route::get('shop2', function () {
    
    
    return view('shop2', ['title' => 'Shop', 'shop2' => [
        [
            'id' => 1,
            'name' => 'Boxy Fit Tee - [Workaholic]',
            'price' => '199.000',
            'rating' => 5, 
            'color' => 'Black',
            'image' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
            'date' => '20231001',
            'data-color' =>  'Black',
            'setbg' => 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png',
            'variant-color' => [
                '#000000', // Black
                '#003b87', // Blue
                '#ffffff' // White
            ],
            'active-color' => '#000000'
        ],
        [
            'id'=> 2,
            'name' => 'Hoodie - [Mata]',
            'price' => '399.000',
            'rating' => 4.5,
            'color' => 'Black',
            'image' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
            'date' => '20230915',
            'data-color' =>  'black white',
            'setbg' => 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png',
            'variant-color' => [
                '#000000', // Black
                '#ffffff' // White
                
            ],
            'active-color' => '#000000'
        ],
        [
            'id'=> 3,
            'name' => 'Crewneck [DRMTSTD]',
            'price' => '249.000',
            'rating' => 4.5,
            'color' => 'Black',
            'image' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
            'date' => '20230820',
            'data-color' =>  'white',
            'setbg' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
            'variant-color' => [
                '#000000', // Black
                'linear-gradient(to right, #000 50%, #b13d47 50%)' // White
            ],
            'active-color' => '#000000'
        ]
    ]]);
});

Route::get('user-profile', function () {
    return view('user-profile');
});

Route::get('wishlist', function () {
    return view('wishlist');
});