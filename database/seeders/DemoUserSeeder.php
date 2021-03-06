<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => env('DEMO_USER_NAME'),
            'email' => env('DEMO_USER_EMAIL'),
            'password' => Hash::make(env('DEMO_USER_PASSWORD')),
        ]);
    }
}
