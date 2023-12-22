@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{asset('css/single-post.css')}}">

<div class="col-md-4 offset-md-4">
    <div class="post-container">
      <div class="post-header">
        <img src="../storage/{{$post->user->config->picture_url}}" alt="User Avatar" class="user-avatar">
       
        <span class="user-name">{{$post->user->name}}</span>
        <button class="btn btn-primary category">
          {{$post->category->name}}
        </button>
     
      </div>
      <img src="../storage/{{$post->file_url}}"  alt="Post Image" class="post-image">
      <div class="post-description">
        <p>{{$post->description}}</p>
      </div>
    </div>





@endsection;
