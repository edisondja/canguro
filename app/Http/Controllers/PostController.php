<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    
 
    public function index(){


    }

    public function create(Request $request){


        $post = new Post();
        $post->title = $request->input("title");
        $post->category_id = $request->input("category");
        $post->user_id = Auth::user()->id;
  
        if($request->hasFile("media")){

            $file = $request->file("media");
            $fileName = $file->getClientOriginalName();
            $url = Storage::disk('public')->put("images/".$fileName,$file);
            $post->file_url = $url; 
        }
        $post->description = $request->input("text");
        $post->type_post = "image";
        $post->save();
        
    

    }


    public function update(Request $request){

        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->user_id = $request->user_id;
        $post->save();


    }

    public function show($id){

        $post = Post::find($id);

        return $post;

    }


    public function search($context){

        $data = Post::where('title','like',"%$context%")->get();
        return $data;

    }

}
