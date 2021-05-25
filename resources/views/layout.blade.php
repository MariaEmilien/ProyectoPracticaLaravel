<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Aprendible') </title>
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
	<style>
		.active a{
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials/nav')
	@include('partials.session-status')
	@yield('content')
</body>
</html>