<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) { 
            $newPost = new Post();

            $newPost->title = 'Post numero ' . ($i + 1);
            $newPost->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, odio soluta quidem voluptatum excepturi molestiae eos esse, quaerat eum cumque dignissimos. Voluptas ipsa deleniti et placeat voluptatem velit labore nam.';
            $newPost->slug = Str::of($newPost->title)->slug('-');

            $newPost->save();
        }
    }
}
