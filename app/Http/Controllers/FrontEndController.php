<?php

namespace App\Http\Controllers;

use App\Post; 
use App\Setting;
use App\Category; 
use App\Tag; 

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    
    $categories = Category::take(4)->get(); 

    $settings = Setting::first(); 

    $posts = Post::all(); 

    $tutorials = Category::find(1);
    $thoughts = Category::find(2);
    $photos = Category::find(3);
    $articles = Category::find(4);


    return view('index', compact('settings', 'categories', 'posts', 'tutorials','thoughts','photos', 'articles'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all(); 
        $settings = Setting::first(); 
        $tags = Tag::all(); 

        // Next/Previous
        $next_id = Post::where('id', '>', $post->id )->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('posts.single', compact('post', 'categories', 'settings', 'tags'))
        ->with('next', Post::find($next_id))
        ->with('prev', Post::find($prev_id));
    }

    public function category($id) 
    {
        $category = Category::find($id);
        $categories = Category::all(); 
        $tags = Tag::all(); 
        $posts = Post::all(); 
        $settings = Setting::first(); 

        return view('posts.category', compact('category','categories', 'posts', 'settings', 'tags'));
    }

    public function tag($id) {

        $tag = Tag::find($id); 
        $categories = Category::all(); 
        $settings = Setting::first(); 

        return view('posts.tag', compact('tag', 'categories', 'settings'));
    }
}
