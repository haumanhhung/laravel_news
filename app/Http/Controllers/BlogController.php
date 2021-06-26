<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        $posts = Post::orderBy('id', 'Desc')->get();
        $recentPosts = Post::with('category')->orderBy('id', 'Desc')->paginate(10);
        return view('web.index', compact('posts', 'recentPosts'));
    }
    public function category($id){
        $category = Category::find($id);
        $posts = Post::where('category_id', $category->id)->paginate(10);
        return view('web.category', compact('category','posts'));  
    }
    public function post($id){
        $post= Post::find($id);
        $category = Category::all();
        return view('web.post', compact('post','category'));
    }
}
