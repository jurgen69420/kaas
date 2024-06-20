<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jurgen Kater',
            'email' => '99071244@mydavinci.nl',
            'password' => Hash::make('password')
        ]);

        $this->call([
            ArtistSeeder::class,
            SongSeeder::class,
            PlaylistSeeder::class,
        ]);
    }
}
