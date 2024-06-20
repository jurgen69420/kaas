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
            "artist_id" => "1",//"dixon dallas",
        ]);
        DB::table('songs')->insert([
            "name" =>"europapa",
            "artist_id" => "2",//""joost klein",
        ]);
        DB::table('songs')->insert([
            "name" =>"Sunshine, Rainbow, White pony",
            "artist_id" => "3",//""大張偉Wowkie Zhang",
        ]);
        DB::table('songs')->insert([
            "name" =>"super idol",
            "artist_id" => "4",//""dissy",
        ]);
        DB::table('songs')->insert([
            "name" =>"mr boombastic",
            "artist_id" => "5",//""biggie cheese",
        ]);
        DB::table('songs')->insert([
            "name" =>"fighting the pain",
            "artist_id" => "6",//""4ever",
        ]);
        DB::table('songs')->insert([
            "name" =>"acid",
            "artist_id" => "6",//""4ever",
        ]);
        DB::table('songs')->insert([
            "name" =>"nebula",
            "artist_id" => "6",//""4ever",
        ]);
        DB::table('songs')->insert([
            "name" =>"NOVA",
            "artist_id" => "6",//""4ever",
        ]);
        DB::table('songs')->insert([
            "name" =>"the end of the line",
            "artist_id" => "7",//""the stupendium",
        ]);
        
    }
}
