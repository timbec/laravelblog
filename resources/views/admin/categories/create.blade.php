@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <h2 class="text-center">
        Create A New Category
    </h2>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('categories.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Store Category</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection