<?php

namespace Tests\Feature;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class TranslateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $blog =Blog::create ([
            'uuid'=> str::uuid(),
            'published' => 1,
            'category_id'=>1 ,
            'user_id'=> 1,
        ]);

        $blog->translations()->create([
              'key' => 'title',
              'value'=> 'بلاگ ۱',
              'locale' => 'fa',
        ]);

         $blog=Blog::find(14);

        $blog->translations()->create([
            'key' => 'title',
            'value'=> 'blog 1',
            'locale' => 'en',
        ]);

        $blog->translations()->create([
            'key' => 'title',
            'value'=> 'blog 1',
            'locale' => 'ar',
        ]);
        dd($blog->load('translations')->toArray());

        $response->assertStatus(200);
    }


}
