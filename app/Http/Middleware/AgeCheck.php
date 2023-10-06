<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class AgeCheck
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
        $query = $request->query();
        $path = $request->path();
        $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        dump($path, $routeName);
        if (!in_array($path, ['noaccess', 'greeting']) && (empty($query['age']) || $query['age'] < 15)) {
            echo 'this text from ' . __FILE__;
            // return redirect()->route('noaccess');
        }
        return $next($request);
    }
}
