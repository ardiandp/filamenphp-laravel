<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(2)->create();
        Kategori::factory(10)->create();
        Artikel::factory(100)->create();
        Role::factory(1)->create();
    }
}
