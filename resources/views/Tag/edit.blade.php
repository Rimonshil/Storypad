@extends('layouts.app')
@section('content')
<form action="{{ URL::to('update/' . $tag->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$tag->name}}">
        <button class="btn btn-success mt-2">Update tag</button>
    </div>
</form>
@endsection