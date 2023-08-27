<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory(2)->create()
        ->each(function (Blog $blog) {
              Comment::factory(10)->create([
                 'user_id' => $blog->user_id,
                 'commentable_type' => Blog::class,
                 'commentable_id' => $blog->id,

              ]);
        });

    }
}
