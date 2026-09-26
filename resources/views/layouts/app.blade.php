<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <x-public.seo
        :title="trim($__env->yieldContent('seo_title')) ?: config('seo.default_title')"
        :description="trim($__env->yieldContent('seo_description')) ?: config('seo.default_description')"
        :canonical="trim($__env->yieldContent('seo_canonical')) ?: url()->current()"
        :image="trim($__env->yieldContent('seo_image')) ?: null"
        :robots="trim($__env->yieldContent('seo_robots')) ?: null"
    />

    <meta name="theme-color" content="#129669">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('assets/images/logo/favicon_io/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo/favicon_io/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/favicon_io/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/logo/favicon_io/site.webmanifest') }}">

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
