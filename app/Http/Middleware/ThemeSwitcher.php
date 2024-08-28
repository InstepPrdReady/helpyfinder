<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ThemeSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Example: Set theme based on subdomain
        $theme = 'helpyfinder'; // default theme

        if ($request->has('theme')) {
            $theme = $request->get('theme'); // theme set by URL parameter
        }

        // Share the theme with all views
        View::share('theme', $theme);

        return $next($request);
    }
}
