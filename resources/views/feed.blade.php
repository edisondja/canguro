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
           {{--
            <div class="card tweet-box">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/profile-user/{{$post->user->name}}">
                            <img src="storage/{{$post->user->config->picture_url}}" class="card-img rounded-circle" width="60" alt="Avatar">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->user->name}}</p>
                            <a href="content/{{$post->id}}">
                                <img src="storage/{{$post->file_url}}" class="card-img-top img-fluid" style="height: 180px; width:380px;" alt="{{$post->title}}">
                            </a>
                            <p class="card-text">
                                {{$post->description}}
                            </p>
                            <div class="interaction-icons">
                                <i class="far fa-comment"></i>
                                <i class="fas fa-retweet"></i>
                                <i class="far fa-heart"></i>
                                <i class="far fa-share-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

       --}}

       <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="storage/{{$post->file_url}}" class="card-img" alt="{{$post->title}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{Str::limit($post->description,20)}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                    <p class="card-text" style="float: right"><img src="storage/{{$post->user->config->picture_url}}" class="card-img rounded-circle" style="height: 50px; width:50px;" alt="Avatar">
                        {{$post->user->name}}
                    </p>

                    <a href="/profile-user/{{$post->user->name}}">
                        
                    </a>
                </div>
            </div>
        </div>
    </div>
            @endforeach
          
        
        </div>
        
    </div>
@endsection