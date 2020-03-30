<?php

namespace App\Http\Middleware;

use Closure;

class NeedAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        if(!user()->isAdmin())
        {
            return redirect(route('news.index'));
        }
        return $next($request);
    }
}
