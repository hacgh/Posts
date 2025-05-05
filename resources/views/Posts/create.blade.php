@extends('layouts.app')
@section('title') Create @endsection
@section('contect')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action={{route('posts.store')}}>
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label" >Title</label>
    <input type="text" class="form-control" name="title" value="{{old('title')}}" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description1" rows="3" value="{{old('description')}}"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
   
    <select name="post_creator" class="form-select" aria-label="Default select example">
       @foreach ($users as $user1)

        <option value="{{$user1->id}}">{{$user1->name}}</option>
        @endforeach
      </select>

   
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>
@endsection