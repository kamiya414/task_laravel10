<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('posts')->insert([
                'title' => 1,
                'body' =>'hello',
        ]);
        DB::table('posts')->insert([
                'title' => 2,
                'body' =>'goodmorning',
        ]);
        DB::table('posts')->insert([
                'title' => 3,
                'body' =>'Hi',
        ]);
        DB::table('posts')->insert([
                'title' => 4,
                'body' =>'Hi',
        ]);
    }
}
