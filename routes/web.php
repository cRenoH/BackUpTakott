<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$users_database = [
    // Kita gunakan email sebagai 'primary key' atau penanda unik
    'user@example.com' => [
        'id' => 1,
        'nama' => 'Slamet Kopling', // Tambahkan nama sesuai kebutuhan di view
        'email' => 'user@example.com',
        'password' => 'password123',
        'avatar' => 'img/users/pp.jpg' // Tambahkan path avatar
    ],
    // Anda bisa menambahkan user lain di sini jika perlu
    'admin@darimata.com' => [
        'id' => 2,
        'nama' => 'Admin Utama',
        'email' => 'admin@darimata.com',
        'password' => 'adminpass',
        'avatar' => 'img/users/admin.jpg'
    ]
];

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
            'rating' => [5.0], 
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
            'rating' =>  [3.7],
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
            'rating' =>  [4.0],
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

Route::get('shop2/{id}', function ($id) {
    $shop2 = [
        [
            'id' => 1,
            'name' => 'Boxy Fit Tee - [Workaholic]',
            'price' => '199.000',
            'rating' => [5.0], 
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
            'rating' =>  [3.7],
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
            'rating' =>  [4.0],
            'color' => 'Black',
            'image' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
            'date' => '20230820',
            'data-color' =>  'white',
            'setbg' => 'img/product/FIX/crewneck/DRMTSTD/DRMTSTD - ALLBLACK - FRONT.png',
            'variant-color' => [
                '#000000', // Black
                'linear-gradient(to right, #000 50%, #b13d47 50%)' // red n white
            ],
            'active-color' => '#000000'
        ]
    ];

    //$shop2 = Arr::first($shop2, function($posts) use ($id) {
      //  return $posts['id'] == $id;
    //});

    //return view('checkout', ['title' => 'Checkout', 'checkout' => $shop2]);
    
});

Route::get('user-profile', function () {
    return view('user-profile');
});

Route::get('wishlist', function () {
    return view('wishlist');
});

Route::get('/', function (Request $request) {
    if ($request->session()->has('user_email')) {
        // Jika sudah login, tampilkan view landing dengan pesan selamat datang
        $email = $request->session()->get('user_email');
        return view('landing')->with('welcome_message', 'Selamat Datang Kembali, ' . $email);
    }
    return view('landing');
})->name('home');



Route::get('login', function () {
    // Jika pengguna sudah login, langsung arahkan ke home, jangan tampilkan form login lagi
    if (session()->has('user_email')) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::get('admin', function () {
    
    if (session()->has('user_email')) {
        return redirect()->route('admin');
    }
    return view('admin');
})->name('admin');

// 2. Rute untuk MEMPROSES data login yang dikirim dari form
Route::post('/login', function (Request $request) use ($users_database) {

    $emailInput = $request->input('email');
    $passwordInput = $request->input('password');

    // Cek apakah email ada di database dan password-nya cocok
    if (!isset($users_database[$emailInput]) && $users_database[$emailInput]['password'] === $passwordInput) {
        return back()->with('error', 'Email atau password yang Anda masukkan salah!');
    }
        $user = $users_database[$emailInput];
        if (isset($users_database[$emailInput]) && $users_database[$emailInput]['password'] === $passwordInput) {
            $request->session()->put('user_email', $user['email']);
            $request->session()->put('user_name', $user['nama']);
            if ($user['email'] === 'admin@darimata.com') {
            // Jika email admin, arahkan ke halaman admin
            return redirect()->route('admin');
        } else {
            // Jika bukan admin, arahkan ke halaman user profile
            return redirect()->route('home')->with('success', 'Login berhasil! Selamat datang, ' . $user['nama']);
        }
        
    }
    // Jika tidak cocok, kembali ke halaman login dengan pesan error
    else {
        return back()->with('error', 'Email atau password yang Anda masukkan salah!');
    }
});

Route::get('user-profile', function (Request $request) use ($users_database) {
    if (!$request->session()->has('user_email')) {
        return redirect()->route('login');
    }

    $loggedInUserEmail = $request->session()->get('user_email');
    $userData = $users_database[$loggedInUserEmail] ?? null;

    if (!$userData) {
        return redirect()->route('logout');
    }
    
    return view('user-profile', ['user' => $userData]); // Ubah dari 'login' ke 'user'
})->name('user-profile');

// Rute untuk proses LOGOUT
Route::get('/logout', function (Request $request) {
    // 1. Hapus session 'user_email' yang menandakan pengguna sudah login
    $request->session()->forget('user_email');
    
    // 2. Hapus semua data session (lebih bersih dan aman)
    $request->session()->flush();

    // 3. Arahkan pengguna kembali ke halaman login dengan pesan sukses
    return redirect('/')->with('success', 'Anda telah berhasil logout.');
})->name('logout');
