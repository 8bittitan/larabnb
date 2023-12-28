<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\ListingImage;
use App\Models\ListingRoom;
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
            'name' => 'Paul Jankowski',
            'email' => 'PJankowski25@gmail.com',
        ]);

        Listing::factory()
            ->count(3)
            ->has(ListingImage::factory()
                ->count(5),
                'images'
            )
            ->has(ListingRoom::factory()
                ->count(4),
                'rooms'
            )
            ->create([
                'user_id' => $user->id,
            ]);
    }
}
