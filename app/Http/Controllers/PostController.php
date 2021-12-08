<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateBylimit(5)]);  
    }
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $user_id = Auth::id();
        $post = Post::insert([
          "title" => $input['title'],
          "body" => $input['body'],
          "user_id" =>  $user_id,
          ]);
       
        return redirect('/posts/' . $post['user_id']);
    }
    
    public function edit(Post $post)
    {
        return view('edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $update = $request['post'];
        $post->fill($update)->save();
        return redirect('/posts/' . $post->id);
        
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
    
    public function home(Post $post,User $user)
    {
        return view('auth.home')->with(['posts' => $post]);
    }
    
    public function login(){
        return view('auth.login');
    }
    
   public function UserDetail(User $user){
      $query = Post::query();
      $query->where('user_id','=',$user->id);
      $post = $query->get();
      return view('mypage')->with(['posts' => $post]);
   }
   
   
}
