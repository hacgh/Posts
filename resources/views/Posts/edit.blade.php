@extends('layouts.app')
@section('title') Edit @endsection
@section('contect')
<form method="POST" action="{{route('posts.update', parameters: $post->id)}}">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="3" value="" >{{$post ->decription}}</textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
    <select name="post_creator" class="form-select" aria-label="Default select example">
      @foreach ($users as $user1)

      <option @selected($user1 ->id == $post->user_id) value="{{$user1->id}}">{{$user1->name}}</option>
      @endforeach
      </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
@endsection