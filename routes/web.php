<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
//import the request class
use Illuminate\Http\Request;




Route::get('/posts', function () {
  $posts = Post::latest();
  if (request('search')) {
      $posts->where('title', 'like', '%' . request('search') . '%')
          ->orWhere('body', 'like', '%' . request('search') . '%');
  }
  return view('posts', [
      'posts' => $posts->get(),
      'categories' => Category::all()
  ]);
});

Route::get('posts/{post:slug}', function (Post $post) {// Post::where('slug', $post)->firstOrFail
  return view('post', [
    'post' => $post
  ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
  return view('posts', [
      'posts' => $category->posts->load('category', 'author')
  ]);
});
Route::get('/authors/{author:username}', function (User $author) {
  return view('posts', [
      'posts' => $author->posts->load('category', 'author')
  ]);
});
Route::get('/posts/search', function () {
 dd(request('search'));
  // $search = request('search');
  // return view('posts', [
  //     'posts' => Post::search($search)->get()
  // ]);
});

