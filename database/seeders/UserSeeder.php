<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin-rizki',
                'email' => 'rizki@email.com',
                'password' => Hash::make('admin'),
                'phone' => '01234567890',
                'address' => 'Jalan Bahagia',
                'role' => 'admin',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instructor',
                'username' => 'instructor-adi',
                'email' => 'adi@email.com',
                'password' => Hash::make('instructor'),
                'phone' => '11987654320',
                'address' => 'Jalan Senang',
                'role' => 'instructor',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'username' => 'user-nugroho',
                'email' => 'nugroho@email.com',
                'password' => Hash::make('user'),
                'phone' => '04561237890',
                'address' => 'Jalan Gembira',
                'role' => 'user',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),                
            ],
        ]);
    }
}
