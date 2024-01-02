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
   
                            
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href="content/{{$post->id}}">
                                    <img src="storage/{{$post->file_url}}" class="card-img" alt="{{$post->title}}">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <h5 class="card-title">{{$post->title}}</h5>
                                    <p class="card-text">{{Str::limit($post->description,40)}}</p>
                                    <p class="card-text" style="float: right"><small class="text-muted" style="float:left">{{$post->created_at}}<strong> {{$post->user->name}} </strong><img src="storage/{{$post->user->config->picture_url}}" class="card-img rounded-circle" style="height: 50px; width:50px;" alt="Avatar">
                                        </small></p>
                                    <p class="card-text" style="float: right">
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