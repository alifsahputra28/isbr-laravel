<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeLocale = $request->route('locale');

        abort_if($routeLocale !== null && ! in_array($routeLocale, ['id', 'en'], true), 404);

        $locale = in_array($routeLocale, ['id', 'en'], true)
            ? $routeLocale
            : config('app.locale', 'id');

        App::setLocale($locale);
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
