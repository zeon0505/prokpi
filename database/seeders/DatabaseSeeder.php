<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admins = [
            ['name' => 'Yoga', 'email' => 'yoga@staimas.com'],
            ['name' => 'Naufal', 'email' => 'naufal@staimas.com'],
            ['name' => 'Syafikah', 'email' => 'syafikah@staimas.com'],
            ['name' => 'Khadafi', 'email' => 'khadafi@staimas.com'],
            ['name' => 'Zaky', 'email' => 'zaky@staimas.com'],
        ];

        foreach ($admins as $admin) {
            User::updateOrCreate(
                ['email' => $admin['email']],
                [
                    'name'     => $admin['name'],
                    'password' => bcrypt('stmas123'),
                    'is_admin' => true,
                ]
            );
        }
    }
}
