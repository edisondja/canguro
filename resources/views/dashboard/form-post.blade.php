@extends('dashboard.panel')


@section('control-mode')

<div class="col-md-5">
    <h3 style="text-align: center">Make your Post</h3>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" placeholder="title post">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea type="password" class="form-control" rows="8"></textarea>
        </div>
        <div class="form-group">
            
            <label for="exampleInputPassword1">Select Category</label>
                <select name="category" id="" class="form-control">
                        <option value="">Hystory</option>
                        <option value="">Science</option>
                        <option value="">Software</option>
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