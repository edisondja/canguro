@extends('dashboard.panel')


@section('control-mode')

<div class="col-md-5">
    <h3 style="text-align: center">Make your Post</h3>

    <form method="POST" enctype="multipart/form-data" action="/update_post">
        @csrf
        <input type="hidden" value="{{$post->id}}" name="id">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control"  name="title" value="{{$post->title}}"  placeholder="title post">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea type="text" name="description"  class="form-control" rows="8">{{$post->description}}
          </textarea>
        </div>
        <div class="form-group">
            
            <label for="exampleInputPassword1">Select Category</label>
                <select name="category"  class="form-control">
                   @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}} / {{$category->description}}</option>
                   @endforeach
                </select>
          </div>
        <hr>
        
        <div class="form-group">
            @if( $post->file_url!='')
                
                    <img src="../storage/{{$post->file_url}}" alt="" width="50">

            @else

            @endif
            <label for="Upload video or image">Image or video</label>
            <input type="file" name="media"/>
        </div>
        <div  style="text-align: center;" ><br>
            <button type="submit"class="btn btn-primary" style="background:rgb(79, 42, 165);width:50%;border-color:rgb(0, 0, 0)">Post</button>
        </div>
     
      </form>


</div>

@endsection