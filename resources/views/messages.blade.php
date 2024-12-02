<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All messages</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4 d-flex flex-row gap-4">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('messages.index')}}">Messages</a>
    </div>
    <div class="container mt-4">
        @foreach ($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">
                    <a href="{{ route('messages.show', $message['id']) }}" class="text-decoration-none">
                        {{ $message['title'] }}
                    </a>
                </h2>
                <p class="card-text">{{ $message['content'] }}</p>
                <p class="card-text">
                    <small class="text-muted">
                        {{ $message['dt'] }}
                    </small>
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>