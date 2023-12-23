@extends('dashboard.panel')


@section('control-mode')

    <div class="col-md-4">
        

        <h3>My Posts</h3><hr>
        <input type="search" class="form-control" placeholder="write the title for search posts"><hr>

        <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>image</th>
                    <th>Update</th>
                    <th>Transh</th>
                </tr>
            

           @foreach ($posts as $post)

                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{ Str::limit($post->description,30) }}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->category->name}}</td>
                    <td><img src="../storage/{{$post->file_url}}" class="mr-3 rounded-circle" alt="Avatar" style="width: 60px;" /></td>
                    <td>
                        <a href="{{ route( 'update_post_show', ['post_id' =>$post->id] ) }}">
                             <img src="{{asset('icons/actualizar.png')}}" alt="" style="cursor:pointer; width: 40px">
                        </a>
                        
                  </td>
                    <td>
                            <img src="{{asset('icons/expediente.png')}}" alt="" style="cursor:pointer; width: 40px">

                    </td>

                </tr>
    

          @endforeach





        </table>




    </div>





@endsection;
