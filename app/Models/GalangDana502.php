<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/GalangDana502.php


class GalangDana502 extends Model
{
    use HasFactory;

    // Jika nama tabel tidak mengikuti konvensi plural otomatis
    protected $table = 'galang_dana_502';

    // Jika Anda memiliki kolom yang tidak dapat diisi massal
    protected $guarded = [];
}

