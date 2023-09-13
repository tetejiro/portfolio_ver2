<?php

namespace App\Http\Middleware;

use App\Models\Notice;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PassArgumentsToDashboard
{
    /**
     * Dashboard 遷移時に周知事項レコードを取得する。
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $notices = Notice::all();
        $request->merge([ 'notices' => $notices ]);

        return $next($request);
    }
}
