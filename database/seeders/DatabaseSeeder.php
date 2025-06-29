<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        User::factory(10)->create();

        // User::factory()->create([
        //     'first_name' => 'Test User',
        //     'last_name' => 'User',
        //     'email' => 'test@example.com',
        //     'phone_number' => '1234567890', // Tambahkan nomor telepon jika diperlukan
        //     'password' => bcrypt('password123'), // Pastikan password di-hash\
        //     'remember_token' => null, // Jika tidak perlu token, bisa di-set null
        //     'provider_name' => null, // Jika tidak menggunakan provider, bisa di-set null
        //     'provider_id' => null, // Jika tidak menggunakan provider, bisa di-set null
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

         $this->call([
            ProductSeeder::class, // <-- TAMBAHKAN BARIS INI
            ProductImages::class, // <-- TAMBAHKAN BARIS INI
            ProductVariants::class, // <-- TAMBAHKAN BARIS INI
            Categories::class, // <-- TAMBAHKAN BARIS INI
            // Anda bisa menambahkan seeder lain di sini jika ada
        ]);
    }
}
