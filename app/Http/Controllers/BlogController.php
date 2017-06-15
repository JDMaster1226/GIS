<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	//numero de post en paginas
    	$posts=Post::simplePaginate(2);
    	return view('index',['posts'=> $posts]);
    }

    public function contact()
    {
        //numero de post en paginas
        //$posts=Post::simplePaginate(2);
        return view('contact');
    }

    public function about()
    {
        //numero de post en paginas
        //$posts=Post::simplePaginate(2);
        return view('about');
    }

    public function show($slug)
    {

    	$post=Post::findBySlug($slug);
    	return view('post.show',['post'=> $post]);
    }


}
