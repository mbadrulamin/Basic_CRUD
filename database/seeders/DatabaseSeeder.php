<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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

        $this->call([
            ItemSeeder::class
        ]);

        //this is magic method
        //refer to https://laravel.com/docs/10.x/eloquent-factories#belongs-to-relationships
        User::factory(5)
            ->hasItems(5000)
            ->create();
    }
}
