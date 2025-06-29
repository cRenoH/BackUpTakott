<?php

use App\Models\Categories;
use App\Models\Products;
use App\Models\ProductImages;
use App\Models\ProductVariants;

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
        'shop2' => Products::all() // Mengambil semua produk dari model Shop
    ]);
})->name('shop2');

Route::get('/shop2', function (Request $request) {
    // Ambil semua kategori yang unik dari tabel Products
    // Kita gunakan 'pluck' untuk mengambil hanya kolom 'category_id'
    // Pastikan 'category_id' adalah nama kolom yang benar di tabel Products
    // Jika ada kesalahan penamaan, pastikan untuk memperbaikinya sesuai dengan struktur
    // database Anda.
    // Misalnya, jika kolomnya 'categoory_id', ganti 'category_id' dengan 'categoory_id'.
    // Jika Anda tidak yakin, periksa struktur tabel Products di database Anda.
    // Jika Anda menggunakan Eloquent, pastikan model Products sudah benar.
    // Jika Anda menggunakan Query Builder, pastikan nama tabel dan kolom sesuai.
    // Jika Anda menggunakan Laravel versi terbaru, pastikan tidak ada kesalahan penamaan.
    
    $categories = Categories::distinct()->pluck('name');
    $slug = Categories::distinct()->pluck('slug');
    $productsImages = ProductImages::distinct()->pluck('image_path');



    // Query dasar
    $query = Products::with('primaryImage');

    if ($request->filled('category')) {
        // Logika filter kategori Anda perlu diperbaiki untuk relasi
        $query->whereHas('category', function($q) use ($request) {
            $q->where('name', $request->category);
        });
    }

    // Eksekusi query untuk mendapatkan produk yang sudah difilter
    $products = $query->get();

    return view('shop2', [
        'shop2' => $products,
        'categories' => $categories,
    ]);

})->name('shop2');


Route::get('/product-details/{products}', function (Products $products) {
    // Muat semua relasi yang dibutuhkan: variants dan semua images
    $products->load('variants', 'images');

    return view('product-details', [
        'title'   => 'Product Details', 
        'product' => $products,
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