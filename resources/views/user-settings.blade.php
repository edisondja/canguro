@extends('dashboard.panel')


@section('control-mode')


    <div class="col-md-5">
        <h4 style="text-align: center">Update the information of your profile</h4>
        <hr>
        <form method="post" action="/settings_create" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label>Profession</label>
                <input type="text" class="form-control" name="profession" value="{{$settings->profession}}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{$settings->address}}">
            </div>
            <div class="form-group">
                <label>Birthdate</label>
                <input type="date" class="form-control" name="birthday" value="{{$settings->birthday}}">
            </div>
    
            <div class="form-group">
                <label>Upload a photo for your profile</label>
                @if ($settings->picture_url!='') 
                    <img src="/storage/{{$settings->picture_url}}" width="50" class="img-fluid"  alt="">
                @else

                 @endif
                
                <input type="file" class="form-control" name="media" value="{{$settings->picture_url}}">
            </div>
    
           <div  style="text-align: center;" ><br>

                <button type="submit"class="btn btn-primary" style="background:rgb(79, 42, 165);width:50%;border-color:rgb(0, 0, 0)">Post</button>
            </div>
         
        </form>
    



    </div>






@endsection