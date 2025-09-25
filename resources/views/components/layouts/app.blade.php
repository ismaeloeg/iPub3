<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'iPub3' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
    @livewireStyles
    @fluxAppearance



</head>
<body class="bg-gray-700">
<header class="p-5">
    <nav>
        <a class="text-5xl" href="{{route("logout")}}">iPub</a>
        <a href="{{ route('home') }}">By Ismael Ouardane</a>

    </nav>
</header>
<main class="p-5">
    {{$slot}}
</main>
@fluxScripts

</body>
</html>
