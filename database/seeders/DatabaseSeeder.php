<?php

namespace Database\Seeders;

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

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Supplier',
            'email' => 'supplier@email.com',
            'password' => bcrypt('password')
        ]);

        $this->call([ClientSeeder::class,
            RolesPermissionsSeeder::class,]
        );
    }
}
