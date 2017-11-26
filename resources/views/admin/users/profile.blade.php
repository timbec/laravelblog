@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <h2 class="text-center">
        Edit Your Profile
    </h2>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('user.profile.update') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
            <label for="name">Password</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group">
            <label for="name">Upload New Avatar</label>
            <input type="file" name="avatar" class="form-control">
            </div>

            <div class="form-group">
            <label for="name">Facebook Profile</label>
            <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
            </div>

            <div class="form-group">
            <label for="name">Youtube Profile</label>
            <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
            </div>

            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" cols="10" rows="10" class="form-control">{{ $user->profile->about }}</textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Update Profile</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection