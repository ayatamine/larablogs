<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Post::create([
          'title'=>'a simple title',
          'slug'=>Str::slug('a simple title'),
          'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, 
          quae animi? Minus quis corporis sunt minima veritatis 
          culpa consequuntur molestias magni quos, non cumque! Et ex repellat id praesentium suscipit.',
          'image'=>'p1.jpg',
          'user_id'=>1,
          'category_id'=>1
        ]);
        \App\Post::create([
          'title'=>'intoduction to js',
          'slug'=>Str::slug('introduction to js'),
          'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, 
          quae animi? Minus quis corporis sunt minima veritatis 
          culpa consequuntur molestias magni quos, non cumque! Et ex repellat id praesentium suscipit.',
          'image'=>'p2.jpg',
          'user_id'=>1,
          'category_id'=>2
        ]);
        \App\Post::create([
          'title'=>'laravel for beginners',
          'slug'=>Str::slug('laravel for beginners'),
          'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, 
          quae animi? Minus quis corporis sunt minima veritatis 
          culpa consequuntur molestias magni quos, non cumque! Et ex repellat id praesentium suscipit.',
          'image'=>'p3.jpg',
          'user_id'=>1,
          'category_id'=>1
        ]);
    }
}
