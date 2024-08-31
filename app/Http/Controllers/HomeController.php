<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()

    {
        // dd('create user post');
        return view('home.create_post');
    }

    public function create_post(Request $request)
    {
               $userid = Auth::user()->id;
       
            $username = Auth::user()->name;
           

        // $name = optional(Auth::user())->name;
        $post = new Post;
        // dd($post);
        $post->title = $request->title;
        $post->description = $request->description;
        
        $post->post_status = 'pending';
        $post->user_id = $userid;
        $post->name = $username;
       
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
        
}
