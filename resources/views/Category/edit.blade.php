@extends('layouts.app')
@section('content')
<form action="{{ URL::to('update/' . $category->id) }}" method="get">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
        <button class="btn btn-success mt-2">Update category</button>
    </div>
</form>
@endsection