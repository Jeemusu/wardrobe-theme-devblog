@extends(theme_view('_layout/inside'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
<section>
  	<div class="container">
    	<h1 class="title">{{ $post->title }}</h1>
		<hr />
		<div class="content-header clearfix">
			<div class="content-date"><span class="icon icon-calendar2"></span>{{ date("dS M Y", strtotime($post->publish_date)) }}</div>
			<div class="content-tags">
				<span class="icon icon-tag"></span>
				<ul class="tags">
			    	@foreach ($post->tags as $item)
			      	@if ($item->tag != "")
			      	<li><a href="{{ Wardrobe::route('posts.tags', $item->tag) }}">{{ $item->tag }}</a></li>
			      	@endif
			      	@endforeach
			    </ul>
			</div>
		</div>
		<hr />
		<div class="content">{{ $post->parsed_content }}</div>
	</div>
</section>
@stop