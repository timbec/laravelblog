@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')

    <h2 class="text-center">
        Update Category
    </h2>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Update Category</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection