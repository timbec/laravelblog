@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Published Posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Featured</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Trash</th>
            </thead>
            <tbody>
            @if($posts->count() > 0 )
                @foreach($posts as $post)
                    <tr>
                        <th>
                            <img width="90px" height="auto" src="{{ $post->featured }}" alt=" /"></th>
                        <th>{{ $post->title }}</th>
                        
                        <th>{{ str_limit($post->content, 20, ' (...)') }}</th>
                        <th>
                            <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-info">Edit</a>
                        </th>
                        <th>
                            <a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="btn btn-danger">Trash</a>
                        </th>
                    </tr>
                @endforeach
            @else 
                <tr>
                    <th colspan="5" text-align="center">No Posts</th>
                </tr>
            @endif
            </tbody>
            </table>
        </div>
    </div>

@endsection