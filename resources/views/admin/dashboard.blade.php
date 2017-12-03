@extends('layouts.app')

@section('content')

    <div class="col-md-3">
        <div class="panel-info">
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        Published Posts
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">
                            {{ $posts_count }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
@endsection
