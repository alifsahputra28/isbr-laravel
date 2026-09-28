{!! '<'.'?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@foreach ($pages as $page)
    @foreach (['id', 'en'] as $locale)
        <url>
            <loc>{{ $page[$locale] }}</loc>
            <xhtml:link rel="alternate" hreflang="id" href="{{ $page['id'] }}" />
            <xhtml:link rel="alternate" hreflang="en" href="{{ $page['en'] }}" />
            <xhtml:link rel="alternate" hreflang="x-default" href="{{ $page['id'] }}" />
        </url>
    @endforeach
@endforeach
</urlset>
