<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('admin');
    }
    public function getPosts(){
        $posts = Post::latest()->with('user')->with('category')->paginate(1);
        foreach($posts as $post){
            $post->setAttribute('added_at',$post->created_at->diffForHumans());
            $post->setAttribute('comments_count',$post->comments->count());
        }
        return response()->json($posts);
    }
}
