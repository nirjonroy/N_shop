<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\UserSeeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
       	'title'=>'Post Title', 'post'=> 'Post'

       ]);
    }
}
