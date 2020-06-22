@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">tags</div>
        <a href="{{route('tags.create')}}" class="btn btn-success">Add tag</a>
    </div>
    
    <div class="card card-default">
        <div class="card-header">tags</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Story Count</th>
                    <th>Action</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag )
                    <tr>
                        <td>
                            {{$tag->name}}
                        </td>
                        <td>
                            {{$tag-> stories-> Count()}}
                        </td>
                        <td><a href="{{route('tags.edit', $tag->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
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