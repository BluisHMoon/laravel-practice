@extends('layouts.site');

@section('content')
    <div id="featured">
        @if (isset($latestPost->id))
            <img src="{{ $latestPost->pic != 0 && $latestPost->pic != null ? $latestPost->pic : asset('images/the-beacon.jpg') }}"
                alt="">
            <div>
                <h2>{{ $latestPost->title }}</h2>
                <span>{{ $latestPost->content }}</span>
                <a href="{{ url('blog-single-post/' . $latestPost->id) }}" class="more">觀看更多</a>
            </div>
        @endif

    </div>
    <ul>
        @foreach ($galleries as $gallery)
            <li>
                <a href="{{ url('gallery') }}">
                    <img src="{{ $gallery->pic != 0 && $gallery->pic != null ? $gallery->pic : asset('images/the-father.jpg') }}" alt="">
                    <span>{{ $gallery->title }}</span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
