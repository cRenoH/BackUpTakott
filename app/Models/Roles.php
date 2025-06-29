<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles"; // Nama tabel yang sesuai di database

    // Definisikan relasi dengan model User jika diperlukan
    public function users()
    {
        return $this->hasMany('App\Models\User', 'role_id');
    }
}
