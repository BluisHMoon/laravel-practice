@extends('layouts/site');

@section('content')
    ;
    <h1><span>{{ $subtitle }}</span></h1>
    <ul class="gallery">
        @foreach ($galleries as $gallery)
            <li>
                <a href="{{ url('gallery-single-post/' . $gallery->id) }}">
                    <img src="{{ $gallery->pic != 0 && $gallery->pic != null ? $gallery->pic : asset('images/mustache1.jpg') }}" alt="">
                </a>
            </li>
        @endforeach
    </ul>
@endsection
