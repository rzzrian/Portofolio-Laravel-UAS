<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Tentukan kolom-kolom yang bisa diisi massal
    protected $fillable = [
        'full_name',
        'email',
        'mobile_number',
        'subject',
        'message',
    ];

    // Jika Anda ingin menonaktifkan timestamps, tambahkan properti ini:
    // public $timestamps = false;
}
