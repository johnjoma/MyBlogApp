<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    public function index(){

        //$posts= Post::where('title','post two')->get();
        //$posts =DB::select('SELECT*FROM posts');
        $posts=Post::all();
        //$posts= Post::orderBy('title','desc')->take(1)->get();
        //$posts= Post::orderBy('title','desc')->get();
        //$posts= Post::orderBy('id','desc')->paginate(3);
        return view ('frontend.index')->with('posts',$posts);
        
    }

    public function show(){

        return view('show');
    }
}
