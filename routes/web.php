<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Shop;


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


/*
|--------------------------------------------------------------------------
| Rute Halaman Utama dan Informasi
|--------------------------------------------------------------------------
| Menggunakan Route::view() untuk rute yang hanya menampilkan view agar
| lebih ringkas dan deklaratif.
*/

Route::view('/', 'landing')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Rute Terkait Produk & Toko
|--------------------------------------------------------------------------
*/

Route::get('/shop2', function ()  {
    return view('shop2', [
        'shop2' => Shop::all() // Mengambil semua produk dari model Shop
    ]);
})->name('shop2');


Route::get('/product-details/{id}', function ($id) {
    return view('product-details', [
        'product' => Shop::find($id) // Mengambil produk berdasarkan ID
    ]);
});

/*
|--------------------------------------------------------------------------
| Rute Keranjang Belanja, Checkout, dan Terkait
|--------------------------------------------------------------------------
*/

Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/payment', 'payment')->name('payment');
Route::view('/invoice', 'invoice')->name('invoice');
Route::view('/wishlist', 'wishlist')->name('wishlist');

/*
|--------------------------------------------------------------------------
| Rute Otentikasi (Login & Logout)
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    // Jika pengguna sudah login, langsung arahkan ke halaman utama.
    if (session()->has('user_email')) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) use ($users_database) {
    $emailInput = $request->input('email');
    $passwordInput = $request->input('password');

    // **LOGIKA DIPERBAIKI**: Cek apakah email ada di database DAN passwordnya cocok.
    if (isset($users_database[$emailInput]) && $users_database[$emailInput]['password'] === $passwordInput) {
        $user = $users_database[$emailInput];

        // Simpan informasi user ke session
        $request->session()->put('user_email', $user['email']);
        $request->session()->put('user_name', $user['nama']);

        // Arahkan ke rute yang sesuai berdasarkan peran (role)
        if ($user['email'] === 'admin@darimata.com') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home')->with('success', 'Login berhasil! Selamat datang, ' . $user['nama']);
    }

    // Jika gagal, kembali ke halaman login dengan pesan error.
    return back()->with('error', 'Email atau password yang Anda masukkan salah!');
})->name('login.submit'); // Nama rute untuk POST dibedakan

Route::get('/logout', function (Request $request) {
    // Hapus semua data dari session untuk keamanan dan kebersihan.
    $request->session()->flush();
    // Arahkan pengguna kembali ke halaman utama dengan pesan sukses.
    return redirect()->route('home')->with('success', 'Anda telah berhasil logout.');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Rute yang Membutuhkan Otentikasi (User & Admin)
|--------------------------------------------------------------------------
| Di aplikasi nyata, rute-rute ini sebaiknya dilindungi oleh middleware.
| Contoh: Route::group(['middleware' => 'auth'], function() { ... });
*/

Route::get('/user-profile', function (Request $request) use ($users_database) {
    // Jika belum login, redirect ke halaman login.
    if (!$request->session()->has('user_email')) {
        return redirect()->route('login');
    }

    $loggedInUserEmail = $request->session()->get('user_email');
    $userData = $users_database[$loggedInUserEmail] ?? null;

    // Jika data user di session tidak valid, logout untuk keamanan.
    if (!$userData) {
        return redirect()->route('logout');
    }

    return view('user-profile', ['user' => $userData]);
})->name('user-profile');

Route::get('/admin', function () {
    // Middleware check sederhana: pastikan yang login adalah admin.
    if (session()->get('user_email') !== 'admin@darimata.com') {
        // Jika bukan admin, tendang ke halaman utama.
        return redirect()->route('home');
    }
    return view('admin');
})->name('admin.dashboard');

// Rute 'customer-service' yang tertinggal
Route::view('/customer-service', 'customer-service(Opsional)')->name('customer.service');