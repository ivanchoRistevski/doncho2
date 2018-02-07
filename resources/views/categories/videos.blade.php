@extends('layouts.main')
@section('content')
    {{--THIS IS THE VIDEOS SECTION , Currently homepage /nothing--}}
    @foreach($posts as $post)
        <div class="row">
            <div class="posts-wrapper">
                @foreach($posts as $post)
                    <a href="{{ $post->path() }}"  class="col-sm-4 article-box videos">
                        <div class="image-post video-preview">
                            <img  src="{!! asset('images/' . $post->featured_photo )  !!}"  />
                        </div>
                            <h4 class="title">{{ $post->title }}</h4>
                    </a>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection