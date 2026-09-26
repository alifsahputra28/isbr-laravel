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
        content="Official website for Ibnu Sina Batam Run 2027."
    >

    <title>
        {{ $title ?? 'Ibnu Sina Batam Run 2027' }}
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>

    <div class="site-shell">
        @yield('content')
    </div>

</body>
</html>
