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
            'email' => 'first@gmail.com',
            'password' => bcrypt('test')
        ]);
        $user2 = User::factory()->create([
            'name' => 'Andrii Pereverziev',
            'email' => 'second@gmail.com',
            'password' => bcrypt('test')
        ]);

        foreach ([1, 2, 3] as $num) {
            Listing::factory()->create([
                'user_id' => $user->id,
                'image' => "../../images/product-$num.png"
            ]);
        }
        foreach ([4, 5, 6] as $num) {
            Listing::factory()->create([
                'user_id' => $user2->id,
                'image' => "../../images/product-$num.png"
            ]);
        }

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
