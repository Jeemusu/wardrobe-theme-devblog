@extends(theme_view('_layout/inside'))

@section('title')
    {{ site_title() }} :: Archives
@stop

@section('content')
	<section class="grey">
		<div class="container">
		    
		    @if (isset($tag))
		    <h2 class="title">#<span class="lowercase">{{ ucfirst($tag) }}</span></h2>
		    @else
		    <h2 class="title">Archives</h2>
		    @endif
			
			<hr />
		    <ul class="archive">
	    	@foreach ($posts as $post)
	    		<li>
	       			<p><span>{{ date("M d, Y", strtotime($post->publish_date)) }}</span> <a href="{{ wardrobe_url('/post/' . $post->slug) }}">{{ $post->title }}</a></p>
	        	</li>
	      	@endforeach
		    </ul>
		</div>
  	</section>
@stop
