@extends('layouts.main')
@section('content')
    {{--THIS IS THE GUIDES SECTION--}}
    <div class="row">
        <div class="posts-wrapper reviews">
            @foreach($posts as $post)
                <a href="{{ $post->path() }}"  class="col-sm-4 reviews-box">
                    <div class="reviews-img">
                        <img  src="{!! asset('images/' . $post->featured_photo )  !!}"  />
                    </div>
                    <h4 class="title guides">{{ $post->title }}</h4>
                    <p class="text-info" >{{str_limit($post->description,80, '..')  }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection