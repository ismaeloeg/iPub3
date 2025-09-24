<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'iPub3' }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-700">
<header class="p-5">
    <nav>
        <a class="text-5xl" href="{{route("logout")}}">Home</a>
    </nav>
</header>
<main class="p-5">
    {{$slot}}
</main>
</body>
</html>
