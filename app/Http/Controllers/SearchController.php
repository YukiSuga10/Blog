<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function search()
    {
        return view('search');
    }
    
    public function search_result(Request $request,Post $post)
    {
            $keyword_title = $request["search"];
            $query = Post::query();
            $post = $query -> where('title','LIKE',"%{$keyword_title["title"]}%")->orderBy('updated_at', 'DESC')->paginate(5);
            
            return view("search_result")->with(['results' => $post]);
    }
}
