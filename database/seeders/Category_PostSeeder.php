<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Category_PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert([
            'post_id' => 1,
            'category_id' => 1
        ]);
        
        DB::table('category_post')->insert([
            'post_id' => 1,
            'category_id' => 4
        ]);
        
        DB::table('category_post')->insert([
            'post_id' => 1,
            'category_id' => 17
        ]);
        
        DB::table('category_post')->insert([
            'post_id' => 2,
            'category_id' => 1
        ]);
    }
}
