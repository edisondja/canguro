<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DB;

class PostController extends Controller
{
    
 
    public function index($post_id){


       $post = Post::find($post_id);
       $comments = $post->coments;

       return view("single-post")->with("post", $post)->with("comments", $comments);



    }

    public function create(Request $request){


        $post = new Post();
        $post->title = $request->input("title");
        $post->category_id = $request->input("category");
        $post->user_id = Auth::user()->id;
  
        if($request->hasFile("media")){

            $file = $request->file('media');
            $fileName = $file->getClientOriginalName();
            // Modifica la ruta para guardar en la carpeta 'imagen' dentro del disco público
            $url = Storage::disk('public')->put('imagen/' . $fileName, $file);
            // Asigna la URL al modelo o hace lo que sea necesario con la URL
            $post->file_url = $url;
        
        }
        $post->description = $request->input("text");
        $post->type_post = "image";
        $post->save();  

        return redirect('/dashboard');
        
    

    }


    public function mypost($user_id){
        


    $post = Post::find($user_id);

    }


    public function ShowPosts($search=""){
   
        $posts= Post::latest()->where('status','!=',0)->limit(25)->get();

      
        return view("feed")->with('posts',$posts);

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
