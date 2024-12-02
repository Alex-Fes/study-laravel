<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $message['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4 d-flex flex-row gap-4">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('messages.index')}}">Messages</a>
    </div>
    <div class="container mt-4">
        <a href="{{ route('messages.index') }}" class="btn"><- Back to all messages</a>
    </div>
    <div class="container mt-4 border rounded-3 p-4">
        <h1 class="title text-center">{{ $message['title'] }}</h1>
        <p class="content text-center">{{ $message['content'] }}</p>
    </div>
</body>

</html>