@extends('layouts.frontend')


@section('content')

    <!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Search: {{ $query }}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="case-item-wrap">
            @if($posts->count() > 0)
            @foreach($posts as $post)
            <figure class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                <img src="{{ $post->featured }}" alt="alt tags">
            </figure>
            <h1><a href="{{ route('posts.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h1>
            
            @endforeach
            @else
            <h1>No Search Results</h1>
            @endif
            </div>
        </main>
    </div> 
</div>

@endsection