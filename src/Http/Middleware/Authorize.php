<?php

namespace i8086\NovaScheduleList\Http\Middleware;

use i8086\NovaScheduleList\NovaScheduleList;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaScheduleList::class)->authorize($request) ? $next($request) : abort(403);
    }
}
