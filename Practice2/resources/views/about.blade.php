@extends('layouts/site')

@section('content')
    <h1><span>{{ $subtitle }}</span></h1>
    <div>
        <img src="{{ ($about->pic != null) ? $about->pic : asset('images/photographer.jpg') }}" alt="">
        <div class="article">
            <h3>{{ $about->title }}</h3>
            <p>
                {{ $about->content }}
            </p>
        </div>
    </div>
@endsection
