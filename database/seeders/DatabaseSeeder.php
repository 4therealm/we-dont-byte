<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
      public function run(): void
    {
     $user = User::factory()->create([
        'name' => 'John Doe',
      ]);
      Post::factory(10)->create([
        'user_id' => $user->id,
      ]);
    }
}
