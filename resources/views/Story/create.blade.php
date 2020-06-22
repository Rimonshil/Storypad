@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Create Post </div>
</div>
<form action="{{route('stories.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
        <label for="body">Description</label>
        <textarea type="text" class="form-control" name="body" id="body" cols="5" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <input id="content" type="hidden" name="content">
        <trix-editor input="content"></trix-editor>
    </div>

    <div class="form-group">
        <label for="published_at">published At</label>
        <input type="text" class="form-control" name="published_at" id="published_at">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control">
            @foreach ($categories as $category)
        <option value="{{$category->id}}">
            {{$category->name}}
        </option>         
            @endforeach
        </select>
    </div>
    @if ($tags->count()>0)

    <div class="form-group">
        <label for="tags">tags</label>
        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
        @foreach ($tags as $tag)
        <option value="{{$tag->id}}">
            {{$tag->name}}  
        </option>
        @endforeach
    </select>
    </div>
    @endif


    <div class="form-group">
        <button type="submit" class="btn btn-success">Create Post</button>
    </div>



    </div>
</form>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
    flatpickr("#published_at", {
        enableTime: true
    })
    

    $(document).ready(function() {
    $('.tags-selector').select2();
});
</script>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

@endsection

