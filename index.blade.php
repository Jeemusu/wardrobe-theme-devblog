@extends(theme_view('_layout/top'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
		@foreach ($posts as $i=>$post)

			<section>
				<div class="container">
					<h2 class="title"><a href="{{ Wardrobe::route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
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
					<div class="content">
						{{ $post->parsed_intro }}
						<p class="readmore"><a href="{{ Wardrobe::route('posts.show', $post->slug) }}">Continue Reading</a></p>
					</div>				
					
				</div>
			</section>

			@if ($i < count($posts)-1)
			<hr />
			@endif

		@endforeach

		{{ $posts->links() }}
@stop
