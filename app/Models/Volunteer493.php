<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer493 extends Model
{
    use HasFactory;
    protected $table = 'volunteer493';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'alamat',
        'alamat_email',
    ];
}
