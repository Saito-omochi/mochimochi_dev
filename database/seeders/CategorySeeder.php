<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '染井吉野',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => '枝垂れ桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => '河津桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => '八重桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => '冬桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '山桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '大山桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '丁字桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '豆桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '霞桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '大島桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '江戸彼岸桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '高嶺桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '深山桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '寒緋桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '熊野桜',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'その他',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
