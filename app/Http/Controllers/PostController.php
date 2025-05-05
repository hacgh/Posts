<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPost=Post::all();
        $users=User::all();
  
        return view('Posts.index', ['posts'=> $allPost,'users'=> $users]);
    }

    public function show (Post $post){


      return view('Posts.show', ['post'=> $post]);
    }

  public function create(){
    $users=User::all();
      return view('Posts.create',['users'=> $users]) ;}

      public function store(){
        request()->validate([
          'title'=> ['required','string','min:3'],
          'description'=>['required','string','min:5'],
          'post_creator'=> ['required','exists:users,id'],

        ]);
        $title= request()->title;
        $description= request()->description1;
        $post_creator= request()->post_creator;
        
      
        

      
       Post::create(['title'=> $title,'description'=> $description,'user_id'=> $post_creator]);

        
        return to_route('posts.index');
      }
      public function edit(Post $post){
        
        $users=User::all();
        return view('Posts.edit',['users'=>$users, 'post'=>$post]) ;
      }
      public function update($id){
        $title= request()->title;
        $description= request()->description;
        $post_creator= request()->post_creator;
        Post::findOrFail($id)->update(['title'=> $title,'description'=> $description,'user_id'=> $post_creator]);
       
        
        return to_route('posts.show',parameters: $id);
        }
        public function destroy($id){
          $post = Post::findOrFail($id)->delete();
         
          return to_route('posts.index');
        }

} 
