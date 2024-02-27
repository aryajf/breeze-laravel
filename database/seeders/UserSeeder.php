<?php

namespace Database\Seeders;

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
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345),
        ]);
        $admin->assignRole('admin');

        $penulis = User::create([
            'name' => 'penulis',
            'username' => 'penulis',
            'email' => 'penulis@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345),
        ]);
        $penulis->assignRole('penulis');
    }
}
