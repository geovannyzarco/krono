<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['oni' => 'EP00116'],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'oni' => 'EP00116',
                'password' => Hash::make('100504'),
                'email_verified_at' => now(),
                'oni_verified_at' => now(),
            ]
        );
    }
}
