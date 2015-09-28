<!doctype html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Default Title</title>

	@include ('partials.css')
	@include ('partials.js')

</head>

<body>



	@include ('partials.nav')
	@include ('partials.flash');

	<div class = "container" style = "padding-top: 70px; width: 60%; margin: 0 auto;">
		@include ('partials.errors');
		@yield('content')
	</div>

	@yield ('scripts')
	@yield ('styles')	

</body>

