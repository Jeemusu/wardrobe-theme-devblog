<section class="grey">
	<div class="container">
  		<h2><a href="{{ wardrobe_url('/post/'.$post->slug) }}">{{ $post->title }}</a></h1>
  		<div class="date">{{ date("d/m/Y", strtotime($post->publish_date)) }}</div>
  		<div class="content">
    	{{ $post->parsed_content }}
  	</div>
</section>
