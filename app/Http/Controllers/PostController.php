<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    

    public function index(){


    }

    public function create (Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->user_id = $request->user_id;
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



    }

}
