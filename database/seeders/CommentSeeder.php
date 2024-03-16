<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'comment' => 'コメント1',
            'user_id' => 1,
            'post_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('comments')->insert([
            'comment' => 'コメント2',
            'user_id' => 1,
            'post_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('comments')->insert([
            'comment' => 'コメント3',
            'user_id' => 1,
            'post_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
