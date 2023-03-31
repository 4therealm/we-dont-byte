<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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


     $user = User::factory()->create();

     $personal = Category::create(['name' => 'Personal', 'slug' => 'personal']);
     $family = Category::create(['name' => 'Family', 'slug' => 'family']);
     $work = Category::create(['name' => 'Work', 'slug' => 'work']);


     Post::create([
       'title' => 'My First Post',
       'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
       'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
       'category_id' => $personal->id,
       'user_id' => $user->id,
       'slug' => 'my-first-post'
     ]);

      Post::create([
        'title' => 'My Second Post',
        'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
        'category_id' => $work->id,
        'user_id' => $user->id,
        'slug' => 'my-second-post'  
      ]);

      Post::create([
        'title' => 'My Third Post',
        'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>',
        'category_id' => $family->id,
        'user_id' => $user->id,
        'slug' => 'my-third-post'  
      ]);

    }
}
