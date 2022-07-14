@extends('layouts/site')

@section('content')
    @if (isset($post->id))
        <h1><span>{{ $subtitle }}</span></h1>
        <div>
            <img src="{{ $post->pic != 0 ? $post->pic : asset('images/grew-a-mustache.jpg') }}" alt="">
            <div class="article">
                <h2>{{ $post->title }}</h2>
                <p>
                    {{ $post->content }}
                </p>
            </div>
        </div>
    @endif
@endsection
