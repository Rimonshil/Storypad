<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoryRequest;
use App\Story;
use App\Tag;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::all();
        
        return view('story.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = Category::all();
        $tags = Tag::all();
        return view('story.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        //dd($request->all());
        $image = $request->image->store('images');
        $story = Story::create([ 
            'title'=> $request->title,
            'body'=> $request->body,
            'content'=> $request->content,
            'category_id'=>$request->category,
            'published_at' => $request->published_at,
            'image' => $image,
            'user_id'=>auth()->user()->id,

        ]);
        if($request->tags) {
            $story-> tags()->attach($request->tags);
        }

        session()->flash('success', 'Story Created successfully');
        return redirect(route('stories.index'));
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::findorfail($id);
        return view("story.edit", compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $story = Story::findorfail($id);
        $story->update($request->all());
        $story->save();
        session()->flash('success', 'Story updated successfully');
        return redirect(route('stories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        $story->delete();
        session()->flash('success', 'Story deleted successfully');
        return redirect()->back();
    }

    public function category(Category $category){
        return view('blog.category')
        ->with('category', $category)
        ->with('stories', $category->story()->paginate(3))
        ->with('categories', Category::all())
        ->with('tags', Tag::all());

    }

    public function tag(Tag $tag){
        return view('blog.tag')->with('tag', $tag)
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('stories', $tag->stories()->paginate(3));
         

    }
}
