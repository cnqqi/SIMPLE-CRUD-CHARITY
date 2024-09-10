<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run()
    {
        Member::create([
            'nim' => '2213010502',
            'password' => Hash::make('2213010502')
        ]);

        Member::create([
            'nim' => '2213010482',
            'password' => Hash::make('2213010482')
        ]);

        Member::create([
            'nim' => '2213010493',
            'password' => Hash::make('2213010493')
        ]);
    }
}
