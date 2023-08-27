<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BlogFactory extends Factory
{
    // this refering to blog class model is not requierd
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'published' => fake()->boolean,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

    }
}
