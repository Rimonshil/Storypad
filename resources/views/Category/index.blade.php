@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
<a href="{{route("categories.create")}}" class="btn btn-success">Add Category</a>
</div>
<div class="card card-default mt-2">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Story Count</th>
                <th>Action</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        {{$category -> story->Count()}}
                    </td>
                    <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td>
                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Trash</button>
                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                    
                @endforeach
            </tbody>

        </table>
    </div>
</div>
    
@endsection