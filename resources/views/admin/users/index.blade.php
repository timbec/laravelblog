@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Delete</th>
            </thead>
            <tbody>
            @if($users->count() > 0 )
                @foreach($users as $user)
                    <tr>
                        <td>
                        <img src="" alt="" with="60" height="60">
                        </td>
                        <td>
                        {{ $user->name }}
                        </td>
                        <td>
                        @if($user->admin)
                            <a href="{{ route('user.not.admin', ['id' => $user->id ]) }}" class="btn btn-xs btn-danger">Remove Permissions</a>
                        @else
                            <a href="{{ route('user.admin', ['id' => $user->id ]) }}" class="btn btn-xs btn-success">Make Admin</a>
                        @endif
                        <td>
                        @if(Auth::id() !== $user->id )
                        <a href="{{ route('user.delete', ['id' => $user->id ]) }}" class="btn btn-xs btn-danger">Delete</a>
                        @endif
                        </td>
                
                        </td>
                        <td>
                        Delete
                        </td>
                    </tr>
                @endforeach
            @else 
                <tr>
                    <th colspan="5" text-align="center">No Users</th>
                </tr>
            @endif
            </tbody>
            </table>
        </div>
    </div>

@endsection