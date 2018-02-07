@extends('layouts.main')
@section('content')
    {{--THIS IS THE REVIEWS SECTION--}}
        <div class="row">
            <div class="posts-wrapper reviews">
                @foreach($posts as $post)
                    <a href="{{ $post->path() }}"  class="col-sm-4 reviews-box">
                        <div class="reviews-img">
                            <img  src="{!! asset('images/' . $post->featured_photo )  !!}"  />
                        </div>
                        <div class="reviews-contain">
                            <span class="grade">8</span>
                            <span class="full-grade">10</span>
                        </div>
                        <h4 class="title">{{ $post->title }}</h4>
                        <p class="text-info" >{{str_limit($post->description,80, '..')  }}</p>
                    </a>
                @endforeach
            </div>
        </div>
@endsection