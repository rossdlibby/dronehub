<!doctype html>
<html lang="en">
<head>
	@if(isset($title))
		<title>{{ $title }}</title>
	@else
		<title>DroneHub</title>
	@endif

	<!-- Viewport -->
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

	{{ HTML::style( '//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/lumen/bootstrap.min.css' ) }}
	{{ HTML::style( '//fonts.googleapis.com/css?family=Montserrat:400,700' ) }}
	{{ HTML::style( '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' ) }}
	{{ HTML::style( 'assets/css/custom.css' ) }}
</head>
<body>