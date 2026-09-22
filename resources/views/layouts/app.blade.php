<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Official race registration website."
    >

    <title>
        {{ $title ?? 'Batam Run' }}
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="bg-canvas text-ink antialiased">

    @yield('content')

</body>
</html>
