<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <title>Q and A</title>
</head>
<body class="bg-gray-100">
    <div class="justify-center flex mb-4">
        <a href="{{route('questions')}}" class="text-5xl">Q & A</a>

    </div>
    @yield('content')
</body>
</html>