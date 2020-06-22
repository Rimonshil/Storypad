@extends('layouts.app');
@section('content')
<div class="card card-default">
    <div class="card-header">Posts</div>
    <a href="" class="btn btn-success">Add Post</a>
</div>
<div class="card card-default">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Image</th>
                <th>E-mail</th>
                <th>Action</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                    <img src="{{ Gravatar::src($user->email)}}" alt="" width="40px" height="40px" style="border-radius: 50%">
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                   @if (!$user->isAdmin())
                    <form action="{{route('users.make-admin', $user->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Make Admin</button>
                    </form>
  
                   @endif
                </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    
@endsection