<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultRoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::query()->updateOrCreate([
            'name' => 'administrator',
            'label' => 'Admin',
        ]);
        Role::query()->updateOrCreate([
            'name' => 'trainer',
            'label' => 'Trainer',
        ]);
        Role::query()->updateOrCreate([
            'name' => 'user',
            'label' => 'User',
        ]);
    }
}
