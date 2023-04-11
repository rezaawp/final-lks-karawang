<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'username' => 'admin_123',
            // 'email_verified_at' => now(),
            'password' => bcrypt('admin1234'), // password
            // 'remember_token' => Str::random(10),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'username' => 'user_123',
            // 'email_verified_at' => now(),
            'password' => bcrypt('user1234'), // password
            // 'remember_token' => Str::random(10),
            'role' => 'user',
        ]);
    }
}
