@extends('layouts/site')

@section('content')
		<h1><span>{{ $subtitle }}</span></h1>
		<div>
			<ul>
                @foreach ($posts as $post)
                <li>
					<a href="{{ url("blog-single-post/".$post->id) }}" class="figure">
						<img src="{{ ($post->pic != 0) ? $post->pic : asset('images/cutting-mustache.jpg') }}" alt="">
					</a>
					<div>
						<h3>{{ $post->title }}</h3>
						<p>
							{{ $post->content }}
						</p>
						<a href="{{ url("blog-single-post/".$post->id) }}" class="more">觀看更多</a>
					</div>
				</li>
                @endforeach
			</ul>
		</div>
@endsection
