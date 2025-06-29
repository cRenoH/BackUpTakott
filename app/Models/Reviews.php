<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = "reviews"; // Nama tabel yang sesuai di database

    // Definisikan relasi dengan model Product jika diperlukan
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
