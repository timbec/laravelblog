@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Featured</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Destroy</th>
            </thead>
            <tbody>
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <tr>
                        <th>
                            <img width="90px" height="auto" src="{{ $post->featured }}" alt=" /"></th>
                        <th>{{ $post->title }}</th>
                        <th>{{ $post->content }}</th>
                        <th>Edit</th>
                        <th>
                            <a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-ex-sm btn-success">Restore</a>
                        </th>
                        <th>
                            <a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-ex-sm btn-danger">Destroy</a>
                        </th>
                    </tr>
                @endforeach
            @else 
                <tr>
                    <th colspan="5" text-align="center">No Trashed Posts</th>
                </tr>
            @endif
            </tbody>
            </table>
        </div>
    </div>

@endsection