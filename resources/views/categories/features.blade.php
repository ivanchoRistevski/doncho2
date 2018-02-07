@extends('layouts.main')
@section('content')
    {{--THIS IS THE FEATURES SECTION--}}
    @foreach($posts as $post)
        <div class="row">
            <div class="posts-wrapper">
                @foreach($posts as $post)
                    <div class="col-sm-4 article-box features">
                        <a href="{{ $post->path() }}" >
                            <div class="image-post features image-wrapper">
                                <img  src="{!! asset('images/' . $post->featured_photo )  !!}"  />
                            </div>
                            <div class="content-wrapper-white">
                                <h4 class="title">{{ $post->title }}</h4>
                                <p class="text-info" >{{str_limit($post->description,80, '..')  }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection