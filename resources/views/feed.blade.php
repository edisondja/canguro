@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <form method="GET"  action="/post_search">
                <input type="search" name="context" class="form-control" placeholder="search more super content">
            </form>
            <hr>


            @foreach($posts as $post)

                    <div class="card tweet-box">
                        <div class="card-body">
                            <div class="media">
                                <a href="/profile-user/{{$post->user->name}}">
                                    <img src="storage/{{$post->user->config->picture_url}}" class="mr-3 rounded-circle" alt="Avatar" style="width: 60px;">
                                </a>
                            
                                <div class="media-body">
                                    <h5 class="mt-0">{{$post->title}}</h5>
                                    <p>{{$post->user->name}}</p>
                                  
                                       <a href="content/{{$post->id}}">
                                            <img src="storage/{{$post->file_url}}" class="img-fluid"  alt="{{$post->title}}" >
                                          
                                        </a>
                                       
                                        <p>
                                            {{$post->description}}
                                        </p>
                                    <!-- Aquí puedes añadir imágenes, enlaces, etc. -->
                                    <div class="interaction-icons">
                                        <i class="far fa-comment"></i>
                                        <i class="fas fa-retweet"></i>
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-share-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

            @endforeach
          
        
        </div>
        
    </div>
@endsection