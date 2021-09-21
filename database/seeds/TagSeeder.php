<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Front end', 'Back end', 'Web Design'];

        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->name=$tag;
            $newTag->slug = Str::of($tag)->slug('-');

            $newTag->save();
        }
    }
}
