@extends('dashboard.panel')


@section('control-mode')

<div class="col-md-5">
    <h3 style="text-align: center">Make your Post</h3>

    <form method="POST" enctype="multipart/form-data" action="post_create">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control"  name="title"  placeholder="title post">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea type="text" name="text"  class="form-control" rows="8"></textarea>
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
            <label for="Upload video or image">Image or video</label>
            <input type="file" name="media"/>
        </div>
        <div  style="text-align: center;" ><br>
            <button type="submit"class="btn btn-primary" style="background:rgb(79, 42, 165);width:50%;border-color:rgb(0, 0, 0)">Post</button>
        </div>
     
      </form>


</div>

@endsection