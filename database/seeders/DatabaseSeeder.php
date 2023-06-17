<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Order;
use App\Models\Place;
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
        $user2 = User::factory()->create([
            'name' => 'Andrii Pereverziev',
            'email' => 'test@gmail.com'
        ]);

        Listing::factory(3)->create([
            'user_id' => $user->id
        ]);

        Listing::factory(3)->create([
            'user_id' => $user2->id
        ]);

        Place::factory()->create([
            'user_id' => $user->id,
            'confirmed' => 1
        ]);

        Place::factory()->create([
            'user_id' => $user2->id,
            'confirmed' => 1
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
