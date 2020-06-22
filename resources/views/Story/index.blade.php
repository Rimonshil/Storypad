@extends('layouts.app');
@section('content')
<div class="card card-default">
    <div class="card-header">Posts</div>
    <a href="{{route('stories.create')}}" class="btn btn-success">Add Story</a>
</div>

<div class="card card-default">
    <div class="card-header">Stories</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Action</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($stories as $story)
                    
                <tr>
                    <td>
                        <img src="{{asset('/storage/'.$story->image)}}" alt="" width="100px" height="60px" class="">
                      
                    </td>
                    <td>
                        {{$story->title}}
                    </td>
                    <td>
                    <a href="{{route('stories.edit', $story->id)}}" class="btn btn-info btn-sms">Edit</a>
                    </td>
                    
                    <td>
                        <form action="{{route('stories.destroy', $story->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sms">Trash</button>
                        </form>
                   
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

    
@endsection