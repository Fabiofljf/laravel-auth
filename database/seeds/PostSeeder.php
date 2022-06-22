<?php

use App\Post;
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
        $posts = config('db.posts');


        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->name = $post['title'];
            $new_post->image = $post['thumb'];
            $new_post->description = $post['description'];
            $new_post->save();
        }
    }
}
