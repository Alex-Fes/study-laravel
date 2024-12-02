<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container mt-4 d-flex flex-row gap-4">
		<a href="{{route('home')}}">Home</a>
		<a href="{{route('messages.index')}}">Messages</a>
	</div>
	Hello!
	{{ $somevar }}
</body>

</html>