@extends('layouts.app')
@section('contect')

@section('title')show @endsection  
      
       
        <div class="card">
            
            <div class="card-header">
              Post info
            </div>
           
                
            
            <div class="card-body">
              
              <h5 class="card-title">Title : {{$post->title}}</h5>
              <p class="card-text">Description :{{$post->description}}</p>
              
            </div>
          </div>
         
          <div class="card mt-4"  >
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Name :{{$post->user->name}}</h5>
              <p class="card-text">Email : {{$post->user->email}}</p>
              <p class="card-text">Created At: {{$post->user->created_at}} </p>
            </div>
          
          </div>

        
        
          
      </div>

      
  </body>
</html>
@endsection
