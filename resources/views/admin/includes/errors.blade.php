 @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <li class="list-group text-danger">
            </li>{{ $error }}
        @endforeach
    @endif