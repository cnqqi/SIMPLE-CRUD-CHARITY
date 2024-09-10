<?php

// app/Models/Member.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $fillable = [
        'nim', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
