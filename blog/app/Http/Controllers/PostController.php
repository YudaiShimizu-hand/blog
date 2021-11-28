<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
   public function index(Post $post)
                        //PostClassの定義
   {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
                                     //viewの$posts変数  //pagenation->PostClassだからPost.php
   }
   public function show(Post $post)
   {
    return view('posts/show')->with(['post' => $post]);
   }
   public function create()
   {
    return view('posts/create');
   }
   public function store(PostRequest $request, Post $post)
                         //これでpostのデータを受け取る
   {
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
   }
   public function edit(Post $post)
   {
    return view('posts/edit')->with(['post' => $post]);
   }
   public function update(PostRequest $request, Post $post)
   {
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
   }
}
