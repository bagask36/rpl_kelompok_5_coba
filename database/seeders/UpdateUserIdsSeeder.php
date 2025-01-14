<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UpdateUserIdsSeeder extends Seeder
{
    public function run()
    {
        User::whereNull('user_id')->orWhere('user_id', '')
            ->get()
            ->each(function ($user) {
                $user->user_id = Str::uuid()->toString();
                $user->save();
            });
    }
}

