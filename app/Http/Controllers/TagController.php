<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
use App\Http\Requests\CreatetagRequest;

class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = tag:: all();
        return view('tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = tag::create($request->all());
        return redirect(route('tags.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = tag::findorfail($id);
        return view('tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag = tag::findorfail($id);
        $tag->update($request -> all()) ;
        $tag->save();
        session()->flash('tag updated successfully');
        return redirect(route('tags.index'));
        
    }
 
    public function destroy(tag $tag) 
    {  
        if($tag->stories->count()>0){
            session()->flash('error', 'category can not  deleted');
            return redirect()->back();
        }

        $tag->delete();
        return redirect()->back();
    }
}



