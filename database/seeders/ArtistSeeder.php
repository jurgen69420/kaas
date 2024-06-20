<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            'name' => "dixon dallas",
        ]);
        DB::table('artists')->insert([
            'name' => "joost klein",
        ]);
        DB::table('artists')->insert([
            'name' => "大張偉Wowkie Zhang",
        ]);
        DB::table('artists')->insert([
            'name' => "dissy",
        ]);
        DB::table('artists')->insert([
            'name' => "biggie cheese",
        ]);
        DB::table('artists')->insert([
            'name' => "4ever",
        ]);
        DB::table('artists')->insert([
            'name' => "the stupendium",
        ]);
    }
}
