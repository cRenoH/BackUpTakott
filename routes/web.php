<?php

use App\Models\Shop;
use App\Models\User;
use App\Models\Order;
use App\Models\Orders;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductVariants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;










Route::view('/', 'landing')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');



Route::get('/shop2', function ()  {

    
    return view('shop2', [
        'shop2' => Products::all() // Mengambil semua produk dari model Shop
    ]);
})->name('shop2');

Route::get('/shop2', function (Request $request) {
    $categories = Categories::all();
    $slug = Categories::distinct()->pluck('slug');
    $productsImages = ProductImages::distinct()->pluck('image_path');
    $query = Products::with(['primaryImage', 'category', 'variants']);
    // $products = Products::all();

    if ($request->filled('category')) {
        // Logika filter kategori Anda perlu diperbaiki untuk relasi
        $query->whereHas('category', function($q) use ($request) {
            $q->where('name', $request->category);
        });
    }

    // Eksekusi query untuk mendapatkan produk yang sudah difilter
    $products = $query->get()->load('variants', 'images');

    return view('shop2', [
        'shop2' => $products,
        'categories' => $categories,
    ]);

})->name('shop2');


Route::get('/product-details/{products}', function (Products $products) {
    // Muat semua relasi yang dibutuhkan: variants dan semua images
     $relatedProducts = Products::where('id', '!=', $products->id)->with(['primaryImage', 'variants'])->inRandomOrder()->take(4)->get();


    $products->load('variants', 'images');

    return view('product-details', [
        'title'   => 'Product Details', 
        'product' => $products,
        'relatedProducts' => $relatedProducts, // Produk terkait untuk rekomendasi
    ]);
})->name('product.details');;

Route::get('/cart/{id}', function (Products $products) {
    // Muat semua relasi yang dibutuhkan: variants dan semua images
    $relatedProducts = Products::where('id', '!=', $products->id)->with(['primaryImage', 'variants'])->inRandomOrder()->take(4)->get();
    $products->load('variants', 'images');

    return view('cart', [
        'title'   => 'Product Details', 
        'product' => $products,
        'relatedProducts' => $relatedProducts, // Produk terkait untuk rekomendasi
    ]);
})->name('cart');;

Route::post('/cart/add', [OrdersController::class, 'add'])->middleware('auth')->name('cart.add');

Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/payment', 'payment')->name('payment');
Route::view('/invoice', 'invoice')->name('invoice');
Route::view('/wishlist', 'wishlist')->name('wishlist');


Route::get('/login', function () {
    // Jika pengguna sudah login, langsung arahkan ke halaman utama.
    if (session()->has('user_email')) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $emailInput = $request->input('email');
    $passwordInput = $request->input('password');
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Cari user berdasarkan email
    $user = User::where('email', $emailInput)->first();

    // Cek apakah user ditemukan dan password cocok
    if ($user && \Illuminate\Support\Facades\Hash::check($passwordInput, $user->password)) {
        // Simpan email user ke session (gunakan key yang konsisten)
        $request->session()->put('user_email', $user->email);

        // Login user secara manual
        Auth::login($user);

        // Cek apakah user adalah admin
        if ($user->is_admin ?? false) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home')->with('success', "Login berhasil! Selamat datang, {$user->name}");
    }

    // Jika gagal, kembali ke halaman login dengan pesan error.
    return back()->with('error', 'Email atau password yang Anda masukkan salah!');

})->name('login.submit');

Route::get('/logout', function (Request $request) {
    // Hapus semua data dari session untuk keamanan dan kebersihan.
    $request->session()->flush();
    // Arahkan pengguna kembali ke halaman utama dengan pesan sukses.
    return redirect()->route('home')->with('success', 'Anda telah berhasil logout.');
})->name('logout');
Route::get('/user-profile', function ()  {
    // Jika belum login, redirect ke halaman login.
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    return view('user-profile', ['user' => $user]);
    
})->name('user-profile');

Route::get('/admin', function (Request $request) {
    $user = Auth::user();
    $totalStock = ProductVariants::sum('stock');
    $totalOrder = Order::whereIn('status', ['completed', 'shipped'])->count();
    $pendingOrder = Order::whereIn('status', ['waiting_payment','processing'])->count();


    $user = User::where('email', session()->get('user_email'))->first();

    if (!$user || !$user->is_admin) {
        return redirect()->route('home');
    }
    return view('admin', [ 
        'totalStock' => $totalStock,
        'totalOrder' => $totalOrder,
        'pendingOrder' => $pendingOrder
    ]);
})->name('admin.dashboard');


// Rute 'customer-service' yang tertinggal
Route::view('/customer-service', 'customer-service(Opsional)')->name('customer.service');