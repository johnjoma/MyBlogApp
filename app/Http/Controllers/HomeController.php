<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
       return view('home');
    }

    
    public function view()
    {
         //$user_id = auth()->user()->id;
        //$user = User::find($user_id);
        $user = auth()->user();
        $posts =$user->posts()->paginate(10);
        //Or with 1 line: $posts = auth()->user()->posts()->paginate();

        //return view('home')->with('posts',$user->posts);
        return view('view')->with('posts',$posts);
    }
}
