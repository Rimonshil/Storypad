<?php

namespace App\Http\Controllers;

use App\Category;
use App\Story;
use App\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
      $search = request()->query('search');
      
      if($search){
            $stories = Story::where('title', 'LIKE', "%{$search}%")->paginate(3);
      }else{
            $stories = Story::paginate(4);
            
      }


      $categories = Category::all();
        $tags = Tag::all();
        
        return view('welcome', compact('stories', 'categories', 'tags'));
    }

    public function show($id)
    {
        $story = Story::findorfail($id);
        return view('blog.show',compact('story'));

    }
}
