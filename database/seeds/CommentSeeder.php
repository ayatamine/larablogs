<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>1,
        ]);
        \App\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>2,
        ]);
        \App\Comment::create([
            'body'=>'some comment here from a simple user',
            'user_id'=>1,
            'post_id'=>3,
        ]);
    }
}
