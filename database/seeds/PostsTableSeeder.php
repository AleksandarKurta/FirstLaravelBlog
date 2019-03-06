<?php

use Illuminate\Database\Seeder;
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
        $post1 = Post::create([
            'title' => 'First Post Title',
            'content' => 'First Post Content',
            'slug' => str_slug('First Post Title'),
            'category_id' => 1,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post1->tags()->sync([1,2]);

        $post2 = Post::create([
            'title' => 'Second Post Title',
            'content' => 'Second Post Content',
            'slug' => str_slug('Second Post Title'),
            'category_id' => 2,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post2->tags()->sync([3]);

        $post3 = Post::create([
            'title' => 'Third Post Title',
            'content' => 'Third Post Content',
            'slug' => str_slug('Third Post Title'),
            'category_id' => 1,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post3->tags()->sync([2,3]);
    }
}
