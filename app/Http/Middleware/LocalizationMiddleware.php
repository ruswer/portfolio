<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    public function handle($request, Closure $next)
    {
        // Sessiyadan tilni oling, agar mavjud bo'lmasa, default tilni o'rnating
        $locale = Session::get('locale', 'en'); // Default til: Ingliz tili
        App::setLocale($locale);

        return $next($request);
    }
}
