<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use DB;

class PostsController extends Controller

{
   // public function __construct()
   // {
     //   $this->middleware('auth',['except'=>['index','show']]);

        
   // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= Post::where('category','FD')->paginate(3);
        //$posts =DB::select('SELECT*FROM posts');
        //$posts=Post::all();
        //$posts= Post::orderBy('title','desc')->take(1)->get();
        //$posts= Post::orderBy('title','desc')->get();
       $posts= Post::orderBy('id','desc')->paginate(3);
        return view ('posts.index')->with('posts',$posts);
        
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('posts.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'slug' => 'required|min:3|max:255|unique:posts',
            'type'=>'required',
            'category'=>'required',
            'body'=>'required|min:100|max:3000'

        ]);
        $post= new Post;
        $post->title=$request->input('title');
        $post->slug = Str::slug($request->slug, '-');
        $post->type=$request->input('type');
        $post->category=$request->input('category');
        $post->body=$request->input('body');
        $post->user_id =auth()->user()->id;
        $post->save();
        return redirect('/posts')->with('success', 'post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$post= Post::find($slug);
        $post=Post::where('slug', $slug)->first();
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
       //Check for correct user
       if(auth()->user()->id !==$post->user_id){
        return redirect('/posts')->with('error','Unauthorized page');
    }
    return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'type'=>'required',
            'body'=>'required'

        ]);
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->category=$request->input('category');
        $post->type=$request->input('type');
        $post->body=$request->input('body');
        
        $post->save();
        return redirect('/posts')->with('success', 'post update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);

        //Check for correct user
       if(auth()->user()->id !==$post->user_id){
        return redirect('/posts')->with('error','Unauthorized page');
    }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted!');

    }
}
