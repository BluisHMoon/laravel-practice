@extends('layouts/site')

@section('content')
    <h1><span>{{ $subtitle }}</span></h1>
    <div>
        <img src="{{ $gallery->pic != 0 && $gallery->pic != null ? asset($gallery->pic) : asset('images/prim-and-proper.jpg') }}" alt="">
        <div class="article">
            <h4>{{ $gallery->title }}</h4>
            <p>
                {{ $gallery->content }}
            </p>
        </div>
    </div>
@endsection
