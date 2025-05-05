
@extends('layouts.app')
@section('contect')
@section('title')index @endsection

        <div class="text-center" >
        
        <a class="btn btn-success" href="{{route('posts.create')}}" role="button">Create Post</a>
        </div>

      
     

        <table class="table mt-4">
        
            <thead>
             
                
         
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Pasted By</th>
                <th scope="col">Create</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
               
             
                 
                   
              @foreach ($posts as $post)
          
              <tr>
               

                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                
                <td>{{$post->user->created_at->format('Y-m-d')}}</td>
                <td>
                    <a type="button" class="btn btn-info", href={{route('posts.show',$post['id'])}}>View</a>
                    <a type="button" class="btn btn-primary", href={{route('posts.edit',$post['id'])}}>Edit</a>
                    <form style="display: inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
 
                </td>
              </tr>
              @endforeach
              
              
             
            
            </tbody>
          </table>
          
      </div>

      
  </body>
</html>
@endsection
