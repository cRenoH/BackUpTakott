<?php

namespace Database\Seeders;

use App\Models\Reviews;
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
        User::factory(5)->is_admin()->create();
        User::factory(1000)->create();
        
        Reviews::factory(500)->create();

         $this->call([
            ProductSeeder::class, // <-- TAMBAHKAN BARIS INI
            ProductImageSeed::class, // <-- TAMBAHKAN BARIS INI
            ProductVariantSeeder::class, // <-- TAMBAHKAN BARIS INI
            Categories::class, // <-- TAMBAHKAN BARIS INI
            // Anda bisa menambahkan seeder lain di sini jika ada
        ]);
    }
}
