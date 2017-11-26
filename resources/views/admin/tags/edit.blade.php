@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <h2 class="text-center">
        Create A New Tag
    </h2>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="tag"></label>
            <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Update Tag</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection