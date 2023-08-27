<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Product;
use App\Models\User;
use App\Models\View;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
            ->create()
            ->each(function (User $user){
                Blog::factory(1)
                ->create([
                    // baraye inke blog factory khodash user jadid nasazad
                    // be in soorat khodaman user_id ra braye blog pro mikonim
                    'user_id' => $user->id,


                ])->each(function (Blog $blog) use ($user){
                        Comment::factory(1)->create([
                            'user_id' => $user->id,
                            'commentable_id' => $blog->id,
                            'commentable_type' => Blog::class,
                        ])->each(function (Comment $comment) use ($user) {
                              View::factory(rand(1,3))->create([
                                 'user_id' => $user->id,
                                 'viewable_type' => Comment::class,
                                  'viewable_id' => $comment->id,
                              ]);
                              Like::factory(rand(1,5))->create([
                                 'user_id' => $user->id,
                                 'likeable_type' => Comment::class,
                                 'likeable_id' => $comment->id,
                              ]);
                        });
                        View::factory(rand(1,3))->create([
                                'user_id' => $user->id,
                                'viewable_id' => $blog->id,
                                'viewable_type' => Blog::class,
                            ]);

                        Like::factory(5)->create([
                                   'user_id' => $user->id,
                                   'likeable_type' => Blog::class,
                                   'likeable_id' => $blog->id,
                              ]);
                        });




                $productSample=Product::factory(1)
                ->create([
                    'user_id' => $user->id,
                ]);
                // mitavan ham az each() estefade kard ya bejaye an az foreach()
                 foreach ($productSample as $item){
                         Comment::factory(rand(1,3))->create([
                            'user_id' => $user->id,
                            'commentable_type' => Product::class,
                            'commentable_id' => $item->id,
                         ])
                         ->each(function (Comment $commentProduct) use($user){
                              Like::factory(2)->create([
                                  'user_id' => $user->id,
                                  'likeable_id' => $commentProduct->id,
                                  'likeable_type' => Comment::class,
                              ]);

                         }) ;


                    }



            });

     }
}
