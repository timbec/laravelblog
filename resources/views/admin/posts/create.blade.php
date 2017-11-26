@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <li class="list-group text-danger">
            </li>{{ $error }}
        @endforeach
    @endif
    <h2 class="text-center">
        Create A New Post
    </h2>

    <div class="panel panel-default">
        <div class="panel-heading">
            Create A New Post
        </div>
        <div class="panel-body">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
            <label for="featured">Featured Image</label>
            <input type="file" name="featured" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Select A Category</label>
                <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select> 
            </div>

            <div class="form-group">
            <label for="tag">Select Tags:</label>
            @foreach($tags as $tag)
                <div class="checkbox">
                    <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>
                </div>
             @endforeach
            </div>
           
            <div class="form-group">
            <label for="content">Content</label>
            <textarea id="summernote" name="content" id="content" cols="50" rows="50" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-successs" type="submit">Store Post</button>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<script>
$(document).ready(function() {
  $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
});

</script>
@stop
