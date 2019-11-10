<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\VisitorsRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

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

        if ($request->server('HTTP_USER_AGENT') === 'masscan/1.0 (https://github.com/robertdavidgraham/masscan)') {
            throw new HttpResponseException(response()->json(['message' => 'You shall not pass'], Response::HTTP_FORBIDDEN));
        }

        return $next($request);
    }
}
