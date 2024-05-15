<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Songseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            "name" =>"good looking",
            "artist" => "dixon dallas",
        ]);
        DB::table('songs')->insert([
            "name" =>"europapa",
            "artist" => "joost klein",
        ]);
        DB::table('songs')->insert([
            "name" =>"Sunshine, Rainbow, White pony",
            "artist" => "大張偉Wowkie Zhang",
        ]);
        DB::table('songs')->insert([
            "name" =>"super idol",
            "artist" => "dissy",
        ]);
        DB::table('songs')->insert([
            "name" =>"mr boombastic",
            "artist" => "biggie cheese",
        ]);
    }
}
