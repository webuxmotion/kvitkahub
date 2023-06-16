<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Andrii Pereverziev',
            'email' => 'pereverziev.test@gmail.com'
        ]);

        Listing::factory(20)->create([
            'user_id' => $user->id
        ]);

        Order::factory(4)->create([
            'listing_id' => 2,
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
