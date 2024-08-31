<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('post');
        // return view('admin.create_post');
        $posts = Post::all();
        return view('admin.showpost', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // $userid = optional(Auth::user())->id;
        // dd(  $userid);
        
        // $name = optional(Auth::user())->name;
        $post = new Post;
        // dd($post);
        $post->title = $request->title;
        $post->description = $request->description;
        
        $post->post_status = 'active';
        
        
        // $post->image = $request->image;
        $image =$request->image;

        if($image)

        {
        
            $imagename =time().'.'.$image->getClientOriginalExtension();
        
            $request->image->move('post_images', $imagename);
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message','Post created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $posts = Post::all();
        // return view('admin.showpost', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        // return redirect()->url('/show_posts')->with('message','Post Deleted Successfully');
        return redirect()->back()->with('message','Post Deleted Successfully');

    }
}
