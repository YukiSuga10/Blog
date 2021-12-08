<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $post,User $user)
    {
        return view('home')->with(['posts' => $post->getPaginateBylimit(5)]); 
    }
    
    public function show_mypage()
    {
        return view('mypage');
    }
}
