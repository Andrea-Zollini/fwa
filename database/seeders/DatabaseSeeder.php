<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment() !== 'production') {
            User::factory()->create([
                'name' => 'Giuseppe Meazza',
                'email' => 'peppe@test.com',
            ]);
        }

        $this->callOnce(
            class: DefaultRoleSeeder::class,
        );
    }
}
