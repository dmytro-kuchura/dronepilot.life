<?php

namespace App\Http\Middleware;

use App\Repositories\VisitorsRepository;
use Closure;
use Illuminate\Http\Request;

class Visitors
{
    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $repository = new VisitorsRepository();

        $repository->store([
            'referer' => $request->server('HTTP_REFERER'),
            'url' => $request->path(),
            'agent' => $request->server('HTTP_USER_AGENT')
        ]);

        return $next($request);
    }
}
