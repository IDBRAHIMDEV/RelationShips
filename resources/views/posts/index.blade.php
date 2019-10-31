@extends('layout')


@section('content')
<div class="row">
    <div class="col-8">

        <h1 class="my-3">Blog youCode</h1>

        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->body }}</p>
                    <span class="badge badge-primary">
                        {{ $post->category->label }}
                    </span>    
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-4">
        <h2>Categories</h2>
        <p>
           @foreach($categories as $category)
            <a href="" class="btn btn-link">{{ $category->label }}</a>
          @endforeach
        </p>
    </div>
</div>
@endsection