@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Create Post </div>
</div>
<form action="{{URL::to('update/' . $story->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
    <input type="text" class="form-control" name="title" id="title" value="{{$story->title}}">
    </div>

    <div class="form-group">
        <label for="body">Description</label>
        <textarea type="text" class="form-control" name="body" id="body" cols="5" rows="5" value="{{$story->body}}" ></textarea>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
            <textarea class="form-control" type="text" name="content" id="content" cols="5" rows="5" value="{{$story->content}}"></textarea>    
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Update Post</button>
    </div>


    </div>
</form>
@endsection

