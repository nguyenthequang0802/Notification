<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Providers\ViewedPostEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  __construct(){
        $this->middleware('auth:web')->except('index');
    }
    public function index(){
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }
    public function show($id){
        $post = Post::find($id);
        if ($post){
            ViewedPostEvent::dispatch(auth()->user(), $post);
            return view('post.show', ['post' => $post]);

        }
        return redirect()->back();
    }
}
