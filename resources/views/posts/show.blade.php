@extends('layouts.main')
@section('content')


    <h5 class="title">{{ $post->title }}</h5>


    <p class="text-info">{{ $post->description }}</p>

    {{--golema slika--}}

    <div class="image-post">
        <img  src="{!! asset('images/' . $post->featured_photo )  !!}" />
    </div>


    {{--telo na postot celosen text so sliki--}}

    <p> {!! $post->body !!}  </p>

@endsection