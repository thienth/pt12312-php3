<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModeratorRoleCheck
{
    const MEMBER_ROLE = 1;
    const AUTHOR_ROLE = 2;
    const MODERATOR_ROLE = 3;
    const ADMIN_ROLE = 4;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // ktra da dang nhap hay chua va co du quyen hay khong
        if(!Auth::check() || Auth::user()->role < self::MODERATOR_ROLE){
            return response()->view('errors.403');
        }
        return $next($request);
    }
}
