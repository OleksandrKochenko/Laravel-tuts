<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Ninja Network</title>
</head>
<body style="background-color: darkslategrey; color:white">

    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="/tut/ninjas">All Ninjas</a>
            <a href="/tut/ninjas/create">Create New</a>
        </nav>
    </header>

    <main class="conteiner">
        {{ $slot }}
    </main>

</body>
</html>
