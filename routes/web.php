<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

$publicPages = [
    'home' => ['/', 'pages.event-profile'],
    'about' => ['/about', 'pages.about'],
    'race-info' => ['/race-info', 'pages.race-info'],
    'race-pack' => ['/race-pack', 'pages.race-pack'],
    'route' => ['/route', 'pages.route'],
    'prices' => ['/prices', 'pages.prices'],
    'podium-prize' => ['/podium-prize', 'pages.podium-prize'],
    'faq' => ['/faq', 'pages.faq'],
    'terms' => ['/terms', 'pages.terms'],
    'contact' => ['/contact', 'pages.contact'],
];

Route::redirect('/', '/id', 302);

Route::prefix('{locale}')
    ->whereIn('locale', ['id', 'en'])
    ->group(function () use ($publicPages): void {
        foreach ($publicPages as $name => [$uri, $view]) {
            Route::view($uri, $view)->name($name);
        }

        Route::get('/{path}', fn () => abort(404))
            ->where('path', '.*');
    });

foreach ($publicPages as [$uri]) {
    if ($uri !== '/') {
        Route::redirect($uri, '/id'.$uri, 302);
    }
}

Route::get('/sitemap.xml', function () use ($publicPages) {
    $pages = collect(array_keys($publicPages))->map(fn (string $name): array => [
        'id' => route($name, ['locale' => 'id']),
        'en' => route($name, ['locale' => 'en']),
    ]);

    return response()
        ->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
