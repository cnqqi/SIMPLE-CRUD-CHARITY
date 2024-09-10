<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi482 extends Model
{
    use HasFactory;

    protected $table = 'donasi482';

    protected $fillable = [
        'nama',
        'nomor',
        'jenis_donasi',
        'jumlah_donasi',
        'keterangan',
    ];
}
