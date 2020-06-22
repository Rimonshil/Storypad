@extends('layouts.app')
@section('content')
<form action="{{route('tags.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
        <button class="btn btn-success mt-2" type="submit">Add Tag</button>
    </div>
</form>
@endsection