<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'ziad',
            'email' => 'ziad@example.com'
        ]);

        User::factory()->create([
            'name' => 'adel',
            'email' => 'adel@example.com'
        ]);

        User::factory()->create([
            'name' => 'John',
            'email' => 'john@example.com',
            'role' => 'instructor'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'admin',
            'role' => 'admin'
        ]);

        User::factory()->count(10)->create();

        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
