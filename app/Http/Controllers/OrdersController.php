<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
     public function add(Request $request)
    {
        $request->validate([
            'variant_id' => 'required|exists:product_variants,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        // Temukan atau buat keranjang baru untuk user ini
        $cart = $user->orders()->firstOrCreate([]);

        // Cek apakah item varian sudah ada di keranjang
        $existingItem = $cart->items()->where('variant_id', $request->variant_id)->first();

        if ($existingItem) {
            // Jika sudah ada, update kuantitasnya
            $existingItem->quantity += $request->quantity;
            $existingItem->save();
        } else {
            // Jika belum ada, buat item baru
            $cart->items()->create([
                'variant_id' => $request->variant_id,
                'quantity' => $request->quantity,
            ]);
        }

        // Kirim response berhasil dalam format JSON
        return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang.']);
    }
}
