<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>@yield('title')</title>
	
		<!-- CSS -->
	    <link href="{{ asset(theme_path('css/bootstrap.min.css')) }}" rel="stylesheet">
	 	<link href="{{ asset(theme_path('css/style.css?v=3')) }}" rel="stylesheet" media="screen">
	 	<link href="{{ asset(theme_path('css/icons.css')) }}" rel="stylesheet" media="screen">
	 	<link href="{{ asset(theme_path('css/prettify-solarized.css')) }}" rel="stylesheet">
        <link href="{{ asset(theme_path('css/prettify.css')) }}" rel="stylesheet">
        <link href="{{ asset(theme_path('css/responsive-nav.css')) }}" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body id="post">

		<div class="nav-wrapper clearfix">
	        <nav class="nav-collapse">
	            <ul class="clearfix">
	                <li class="active"><a href="{{ wardrobe_url('/') }}"><span class="icon icon-home"></span>Home</a></li>
	                <li><a href="{{ wardrobe_url('/archive') }}"><span class="icon icon-drawer2"></span>Archive</a></li>
	                <li><a href="{{ wardrobe_url('/rss') }}"><span class="icon icon-feed3"></span>RSS</a></li>
	            </ul>
	        </nav>	
      	</div>

      	<div class="main-content">
      
        @yield('content')
      
		</div>
		
		<footer>
			<div class="container text-center">
				<p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
			</div>
		</footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset(theme_path('js/bootstrap.min.js')) }}"></script>
        <script src="{{ asset(theme_path('js/responsive-nav.js')) }}"></script>
        <script src="{{ asset(theme_path('js/prettify.js')) }}"></script>

        <script type="text/javascript">
            $(function(){
                var nav = responsiveNav(".nav-collapse", {insert: "after"});
                window.prettyPrint && prettyPrint();
            })
        </script>
	</body>
</html>