<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>
<body>
    <h1>
        Welcome to the Laravel tutorial
    </h1>
    <p>Click the button to view the list of ninjas</p>
<a href="{{ url()->current() }}/ninjas" class="btn">Find Ninjas!</a>
</body>
</html>
