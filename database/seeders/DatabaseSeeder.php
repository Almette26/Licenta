<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();

        Category::truncate();

        Post::truncate();


        $user = User::factory()->create([
           'name' => 'John Doe',
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        /*$user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' =>$family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Excerpt for my post',
            'body' => '<p>I like going out with my family</p>',


        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' =>$work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Excerpt for my post',
            'body' => '<p>I like working hard</p>',
        ]);*/

//
    }
}
