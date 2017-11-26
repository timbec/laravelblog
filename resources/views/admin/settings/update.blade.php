@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <h2 class="text-center">
        Update Settings
    </h2>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('settings.update') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="name">Site Name</label>
            <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
            </div>
            <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
            </div>
            <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
            </div>
            <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Update Site Settings</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection